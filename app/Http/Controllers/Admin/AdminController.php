<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\RecognitionApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $total_sales = RecognitionApply::where('status', '=', 2)->sum('sub_total');
        $total_prodct = RecognitionApply::where('status', '=', 2)->count('product_id');
        $total_product=Product::all()->count('id');
        $total_brand=Brand::all()->count('id');
        $sales_data = RecognitionApply::where('status_checker', 1)->get();
        $category_data = Category::all();


        return view('backend.admin.dashborad',
            compact('total_sales','total_prodct','total_product','total_brand','sales_data','category_data'));
    }

            public  function list(){
                    $data=Admin::all();
                    return view('backend.admin.user',compact('data'));
            }

            public  function profile(){
                $admin_id=Auth::guard('admin')->user()->id;
                $data=Admin::where('id','=',$admin_id)->first();
                return view('backend.admin.profile',compact('data'));
            }

}
