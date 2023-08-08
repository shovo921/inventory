<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    //
    public  function  index(){
//        $data = DB::table('products')
//            ->join('recognition_applies', 'recognition_applies.product_id', '=', 'products.id')
//            ->select('recognition_applies.quantity as out1qunatity', 'products.*', DB::raw('SUM(recognition_applies.quantity) as outqunatity'))
////            ->groupByRaw('id,name,category_id,category_name,sub_category_id,sub_category_name,brand_name,description,price,quantity,stock,image,note,expire_date,created_at,updated_at,recognition_applies.quantity')
//            ->get();
        $data = DB::table('products')
            ->join('recognition_applies', 'recognition_applies.product_id', '=', 'products.id')
            ->select('products.id', 'recognition_applies.status','products.name','products.stock','products.expire_date', DB::raw('SUM(recognition_applies.quantity) as total_quantity'))
            ->where('recognition_applies.status', '=', 2)
            ->groupBy('products.id', 'products.name','products.stock','products.expire_date','recognition_applies.status')
            ->get();

        return view('backend.stock.list',compact('data'));
    }

    public  function  search(Request $request)
    {
        $from_date=$request->from_date;
        $to_date=$request->to_date;

        $data = DB::table('products')
            ->join('recognition_applies', 'recognition_applies.product_id', '=', 'products.id')
            ->select('products.id', 'recognition_applies.status','products.name','products.stock','products.expire_date', DB::raw('SUM(recognition_applies.quantity) as total_quantity'))
            ->where('recognition_applies.status', '=', 2)
            ->whereBetween(DB::raw('DATE(recognition_applies.updated_at)'), [$from_date, $to_date])
            ->groupBy('products.id', 'products.name','products.stock','products.expire_date','recognition_applies.status')
            ->get();


        return view('backend.stock.list',compact('data'));
    }
}
