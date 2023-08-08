<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function index()
    {
//        $data = SubCategory::all();
        $data = DB::table('sub_categories')
            ->join('categories', 'sub_categories.parent_category_id', '=', 'categories.id')
            ->select('sub_categories.*', 'categories.title')
            ->get();


        return view('backend.category.sub_category.list', compact('data'));
    }
    public function create()
    {
        $category=Category::all();

        return view('backend.category.sub_category.create',compact('category'));
    }

    public function store(Request $request)
    {

        //        Validate the image file
        $request->validate([

            'parent_category_id' => 'required',
            'subcategory_name' => 'required',
            'subcategory_description' => 'required',
        ]);



        $data = new SubCategory();

        $data->parent_category_id = $request->parent_category_id;
        $data->subcategory_name = $request->subcategory_name;
        $data->subcategory_description = $request->subcategory_description;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('message', 'Success! Your data has been inserted.');
    }
    public function edit($id)
    {
        $category=Category::all();
        $data = SubCategory::where('id', $id)->get()->first();

        return view('backend.category.sub_category.edit', compact('data',"category"));
    }


    public function update(Request $request)
    {
//        Validate the image file
        $request->validate([
            'parent_category_id' => 'required',
            'subcategory_name' => 'required',
            'subcategory_description' => 'required',
        ]);


        $id = $request->id;



        $data = SubCategory::where('id', $id)->get()->first();

        $data = SubCategory::find($data->id);
        $data->parent_category_id = $request->parent_category_id;
        $data->subcategory_name = $request->subcategory_name;
        $data->subcategory_description = $request->subcategory_description;
        $data->save();


        // Redirect the user back with a success message
        return redirect()->back()->with('info', 'Success! Your data has been updated.');
    }

    public  function destroy(Request $request)
    {
        $id =$request->id;
        $data = SubCategory::find($id);
        $data->delete();
        // Redirect the user back with a success message
        return redirect()->back()->with('warning', 'Success! Your data has been deleted.');
    }

    public  function GetData($category_id)
    {


        $subcategories = SubCategory::where('parent_category_id', $category_id)->get();
        return response()->json($subcategories);
    }
}
