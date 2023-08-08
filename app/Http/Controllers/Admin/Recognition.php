<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\RecognitionApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Recognition extends Controller
{
    //
    public  function create()
    {
        $data=Product::all();
        return view('backend.recognition.create',compact('data'));

    }
    public function shoping($product_id){
        $data=Product::where('id',$product_id)->first();
        return view('backend.recognition.shoping',compact('data'));
    }

public  function  shopingorder(Request $request){

        $product_id=$request->product_id;
        $quantity=$request->quantity;
        $product=Product::where('id',$product_id)->first();
       $subtotal =$product->price *$quantity;

//       insert data
    $data= new RecognitionApply();
    $data->product_id = $product_id;
    $data->user_id = Auth::guard('admin')->user()->id;
    $data->sub_total = $subtotal;
    $data->price = $product->price;
    $data->status_checker = 1;
    $data->status = 1;
    $data->quantity = $quantity;
    $data->save();
    return redirect()->route('recognition.list')->with('message', 'Success! Your recognition has been submitted.');
}
public  function  ManuallyStore (Request $request)
{

    //        Validate the image file
    $request->validate([
        'quantity' => 'required',
        'title' => 'required',
        'description' => 'required',
    ]);
    $data= new RecognitionApply();
    $data->title = $request->title;
    $data->user_id = Auth::guard('admin')->user()->id;
    $data->description = $request->description;
    $data->status_checker = 2;
    $data->status = 1;
    $data->quantity = $request->quantity;
    $data->save();
    return redirect()->route('recognition.list')->with('message', 'Success! Your recognition has been submitted.');
}

public  function  list()
{
    $data = RecognitionApply::where('status_checker', 1)->get();
    $data2 = RecognitionApply::where('status_checker', 2)->get();
    return view('backend.recognition.list',compact('data','data2'));
}

    public  function destroy(Request $request)
    {
        $id =$request->id;
        $data = RecognitionApply::find($id);
        $data->delete();
        // Redirect the user back with a success message
        return redirect()->back()->with('warning', 'Success! Your data has been deleted.');
    }
}
