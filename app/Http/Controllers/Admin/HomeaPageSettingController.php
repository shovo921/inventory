<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeaPageSettingController extends Controller
{
    public function index()
    {
        return view('backend.homepagesetting.edit');

    }

    public function edit(Request $request)
    {

        return view('backend.homepagesetting.edit');
    }
}
