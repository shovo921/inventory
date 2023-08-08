<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class HomeBannerController extends Controller
{
    public function index()
    {
        $data = Brand::all();
        return view('backend.brand.list', compact('data'));
    }

    public function create()
    {

        return view('backend.brand.create');
    }

    public function store(Request $request)
    {

        //        Validate the image file
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);


        $randomNumber = random_int(100000, 999999);


        if ($image = $request->file('image')) {
            $destinationPath = 'frontend/server/image/banner';
            $bannerimage = date('YmdHis') . $randomNumber . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $bannerimage);

        }

        $data = new Brand();
        $data->image = $bannerimage;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('message', 'Success! Your data has been inserted.');
    }

    public function edit($id)
    {
        $data = Brand::where('id', $id)->get()->first();

        return view('backend.brand.edit', compact('data'));
    }


    public function update(Request $request)
    {
//        Validate the image file
        $request->validate([
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);


        $id = $request->id;

        $randomNumber = random_int(100000, 999999);

        $data = Brand::where('id', $id)->get()->first();


        if ($request->has('image')) {
            unlink(public_path('frontend/server/image/banner/' . $data->image));
            $image = $request->file('image');
            $destinationPath = 'frontend/server/image/banner';
            $logo = date('YmdHis') . $randomNumber . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $logo);

        } else {
            $logo = $data->image;
        }


        $data = Brand::find($data->id);
        $data->image = $logo;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('info', 'Success! Your data has been updated.');
    }

    public  function destroy(Request $request)
    {
        $id =$request->id;
        $data = Brand::find($id);

        unlink(public_path('frontend/server/image/banner/' . $data->image));
        $data->delete();
        // Redirect the user back with a success message
        return redirect()->back()->with('warning', 'Success! Your data has been deleted.');
    }
}
