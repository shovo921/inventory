<?php

namespace App\Http\Controllers;


use App\Jobs\ContactMailJob;
use App\Mail\Contactmail;
use App\Models\Contact;
use App\Models\Brand;
use App\Models\HomeSetting;
use App\Models\OurStory;
use App\Models\Category;
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

    public function index()
    {
//home banner
        $bannerdata = Brand::all();
        //        our story data
        $ourstory = OurStory::latest()->take(6)->get();
//        our service
        $service=Category::all();

//        home setting data
        $data = HomeSetting::all()->first();

        return view('frontend.home', compact('data', 'ourstory','bannerdata','service'));
    }

    public function ContactStore(ContactRequest $request)
    {

//        $validated = $request->validated();
        $adminuser = DB::table('admins')->get();

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'messege' => $request->message,
        ]);
//        Mail::to($request->email)->send(new Contactmail($contact));
        ContactMailJob::dispatch($contact, $adminuser);
        return redirect()->back()->with('message', 'Data added Successfully');


    }

}


