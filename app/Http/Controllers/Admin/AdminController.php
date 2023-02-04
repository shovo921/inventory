<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('backend.admin.auth.login');
    }

    public function index()
    {
        return view('backend.admin.auth.login');
    }

    public function  dashboard(){
        return view('backend.admin.dashborad');
    }



}
