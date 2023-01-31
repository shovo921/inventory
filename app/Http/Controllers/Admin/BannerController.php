<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //

    public  function index(){

        return view('backend.banner.list');
    }

    public  function create(Request $request)
    {
        return view('backend.banner.create');
    }

    public  function store(){

    }

}
