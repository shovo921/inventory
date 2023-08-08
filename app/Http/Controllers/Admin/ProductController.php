<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $data = Product::all();
        return view('backend.product.list',compact('data'));
    }

    public function create()
    {
    $brand=Brand::all();
    $category= Category::all();
        return view('backend.product.create',compact('brand','category'));
    }

    public function store(Request $request)
    {
        //        Validate the image file
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'brand_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            'note' => 'required',
            'description' => 'required',
        ]);

  $category_name = DB::table('categories')
        ->where('id', '=', $request->category_id)
        ->first();
   $sub_category_name = DB::table('sub_categories')
            ->where('id', '=', $request->sub_category_id)
            ->first();


        $randomNumber = random_int(100000, 999999);


        if ($image = $request->file('image')) {
            $destinationPath = 'frontend/server/image/product';
            $bannerimage = date('YmdHis') . $randomNumber . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $bannerimage);

        }

        $data = new Product();
        $data->image = $bannerimage;
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->category_name = $category_name->title;
        $data->sub_category_id = $request->sub_category_id;
        $data->sub_category_name = $sub_category_name->subcategory_name;
        $data->brand_name = $request->brand_name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->stock= $request->quantity;
        $data->note = $request->note;
        $data->expire_date = $request->date;
        $data->description = $request->description;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('message', 'Success! Your data has been inserted.');
    }

    public function edit($id)
    {
        $brand=Brand::all();
        $category= Category::all();
        $data = Product::where('id', $id)->get()->first();

        return view('backend.product.edit', compact('data','brand','category'));
    }


    public function update(Request $request)
    {
//        Validate the image file
        $request->validate([

            'name' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'brand_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            'note' => 'required',
            'description' => 'required',
        ]);

        $category_name = DB::table('categories')
            ->where('id', '=', $request->category_id)
            ->first();
        $sub_category_name = DB::table('sub_categories')
            ->where('id', '=', $request->sub_category_id)
            ->first();

        $id = $request->id;

        $randomNumber = random_int(100000, 999999);

        $data = Product::where('id', $id)->get()->first();


        if ($request->has('image')) {
            unlink(public_path('frontend/server/image/product/' . $data->image));
            $image = $request->file('image');
            $destinationPath = 'frontend/server/image/product';
            $logo = date('YmdHis') . $randomNumber . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $logo);

        } else {
            $logo = $data->image;
        }


        $data = Product::find($data->id);
        $data->image = $logo;
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->category_name = $category_name->title;
        $data->sub_category_id = $request->sub_category_id;
        $data->sub_category_name = $sub_category_name->subcategory_name;
        $data->brand_name = $request->brand_name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->stock= $request->quantity;
        $data->note = $request->note;
        $data->expire_date = $request->date;
        $data->description = $request->description;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('info', 'Success! Your data has been updated.');
    }

    public  function destroy(Request $request)
    {
        $id =$request->id;
        $data = Product::find($id);

        unlink(public_path('frontend/server/image/product/' . $data->image));
        $data->delete();
        // Redirect the user back with a success message
        return redirect()->back()->with('warning', 'Success! Your data has been deleted.');
    }

}
