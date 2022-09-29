<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);


        return view('dashboard.contact',compact('contacts'));
    }

    public function store(Request $request)

    {
        
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        return back()->with('post_created','Message has been created sucessfully');

    }


}
