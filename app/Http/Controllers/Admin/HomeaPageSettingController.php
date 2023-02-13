<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSetting;
use Illuminate\Http\Request;

class HomeaPageSettingController extends Controller
{
    public function index()
    {
        $data=HomeSetting::all()->first();
        return view('backend.homepagesetting.edit',compact($data));

    }

    public function edit(Request $request)
    {

        // Validate the image file
//        $request->validate([
//            'logo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'banner' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'title' => 'required',
//        ]);
        $randomNumber = random_int(100000, 999999);
        $randomNumber1 = random_int(10000, 99999);

        if ($image = $request->file('logo')) {
            $destinationPath = 'frontend/server/image';
            $logo = date('YmdHis') .$randomNumber. "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $logo);



        }

        if ($image1 = $request->file('banner')) {
            $destinationPath = 'frontend/server/image';
            $banner= date('YmdHis') .$randomNumber1. "." . $image1->getClientOriginalExtension();
            $image1->move(public_path($destinationPath), $banner);



        }

        $data= new HomeSetting();
        $data->logo =$logo;
        $data->image =$banner;
        $data->title =$request->title;
        $data->phone_number =$request->title;
        $data->email =$request->title;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('message', 'sussesfully deleteed');
    }
}
