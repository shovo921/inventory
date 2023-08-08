<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::all();
        return view('backend.category.list', compact('data'));
    }

    public function create()
    {

        return view('backend.category.create');
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
            $destinationPath = 'frontend/server/image/service';
            $bannerimage = date('YmdHis') . $randomNumber . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $bannerimage);

        }

        $data = new Category();
        $data->image = $bannerimage;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('message', 'Success! Your data has been inserted.');
    }

    public function edit($id)
    {
        $data = Category::where('id', $id)->get()->first();

        return view('backend.category.edit', compact('data'));
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

        $data = Category::where('id', $id)->get()->first();


        if ($request->has('image')) {
            unlink(public_path('frontend/server/image/service/' . $data->image));
            $image = $request->file('image');
            $destinationPath = 'frontend/server/image/service';
            $logo = date('YmdHis') . $randomNumber . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $logo);

        } else {
            $logo = $data->image;
        }


        $data = Category::find($data->id);
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
        $data = Category::find($id);

        unlink(public_path('frontend/server/image/service/' . $data->image));
        $data->delete();
        // Redirect the user back with a success message
        return redirect()->back()->with('warning', 'Success! Your data has been deleted.');
    }

//    sub category function here

}
