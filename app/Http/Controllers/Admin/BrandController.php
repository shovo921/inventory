<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //

    public  function index(){

        return view('backend.brand.list');
    }

    public  function create(Request $request)
    {
        return view('backend.brand.create');
    }

    public  function store(){

    }

}
