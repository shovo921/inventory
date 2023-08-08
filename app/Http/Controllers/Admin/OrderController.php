<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\RecognitionApply;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public  function create()
    {
        $data=Product::all();
        return view('backend.order.create',compact('data'));

    }

    public function list(){
        $data = RecognitionApply::where('status_checker', 1)->get();
        $data2 = RecognitionApply::where('status_checker', 2)->get();
        return view('backend.order.list',compact('data','data2'));
    }
    public  function  view($id){


        $data = RecognitionApply::where('id', $id)->first();
        if ($data->status_checker ==1) {
            $product = Product::where('id', $data->product_id)->first();
            return view('backend.order.view', compact('data', 'product'));
        }
        else{
            return view('backend.order.view', compact('data', ));
        }

    }
    public  function update(Request $request)
    {

        $id=$request->recognition_id;
        $product_id=$request->product_id;
        $status=$request->status;
        $note=$request->note;
        $status_checker=$request->status_checker;
        $product=Product::where('id', $product_id)->first();

        if ($status_checker==1)
        {
           if ($status==2){
             $quntity=$product->quantity - $request->quantity;
               $data = Product::find($product_id);
               $data->quantity = $quntity;
               $data->save();

               $data1=RecognitionApply::find($id);
               $data1->status = $status;
               $data1->note = $note;
               $data1->save();

               // Redirect the user back with a success message
               return redirect()->back()->with('info', 'Success! Your data has been updated.');
           }
           elseif ($status==3){
               $data1=RecognitionApply::find($id);
               $data1->status = $status;
               $data1->note = $note;
               $data1->save();
               return redirect()->back()->with('info', 'Success! Your data has been updated.');
           }
        }

        else{
            $data1=RecognitionApply::find($id);
            $data1->status = $status;
            $data1->note = $note;
            $data1->save();
            return redirect()->back()->with('info', 'Success! Your data has been updated.');
        }


    }


}
