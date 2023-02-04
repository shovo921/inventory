<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public  function  index (){
        return view('frontend.search');
    }

    public  function  search(Request $request)
        {

            dd($request->all());
        }
}
