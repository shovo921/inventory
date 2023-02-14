<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ConatctController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy("id", "desc")->get();

        return view('backend.contact.list', compact('data'));
    }


    public function details($id)
    {
        $data = Contact::where('id', $id)->get()->first();
        return view('backend.contact.view', compact('data'));

    }

    public function destory(Request $request)
    {
        $id = $request->id;
        $delete = Contact::where('id', $id)->firstorfail()->delete();
        return redirect()->back()->with('warning', 'Success! Your data has been deleted.');

    }
}
