<?php

namespace App\Http\Controllers;


use App\Jobs\ContactMailJob;
use App\Mail\Contactmail;
use App\Models\Contact;
use App\Models\HomeSetting;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public  function index(){
        $data = HomeSetting::all()->first();
        return view('frontend.home',compact('data'));
    }

    public function ContactStore(ContactRequest $request)
    {

//        $validated = $request->validated();
        $adminuser= DB::table('admins')->get();

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'messege' => $request->message,
        ]);
//        Mail::to($request->email)->send(new Contactmail($contact));
        ContactMailJob::dispatch($contact,$adminuser);
        return redirect()->back()->with('message', 'Data added Successfully');


    }

}


