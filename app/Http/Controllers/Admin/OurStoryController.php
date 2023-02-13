<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurStory;
use Illuminate\Http\Request;

class OurStoryController extends Controller
{
    //

    public function index()
    {
        $data = OurStory::all();
        return view('backend.story.list', compact('data'));
    }

    public function create()
    {

        return view('backend.story.create');
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
            $destinationPath = 'frontend/server/image/story';
            $bannerimage = date('YmdHis') . $randomNumber . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $bannerimage);

        }

        $data = new OurStory();
        $data->image = $bannerimage;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('message', 'Sucessfully Insert');
    }

    public function edit($id)
    {
        $data = OurStory::where('id', $id)->get()->first();

        return view('backend.story.edit', compact('data'));
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

        $data = OurStory::where('id', $id)->get()->first();


        if ($request->has('image')) {
            unlink(public_path('frontend/server/image/story/' . $data->image));
            $image = $request->file('image');
            $destinationPath = 'frontend/server/image/story';
            $logo = date('YmdHis') . $randomNumber . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $logo);

        } else {
            $logo = $data->image;
        }


        $data = OurStory::find($data->id);
        $data->image = $logo;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('message', 'Sucessfully  Updated');
    }

    public  function destroy(Request $request)
    {
       $id =$request->id;
        $data = OurStory::find($id);

        unlink(public_path('frontend/server/image/story/' . $data->image));
        $data->delete();
        // Redirect the user back with a success message
        return redirect()->back()->with('message', 'Sucessfully Deleted');
    }
}
