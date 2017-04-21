<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        
    	$add = new Contact;
    	$add->name = $request->name;
    	$add->email = $request->email;
    	$add->message = $request->message;

    	$add->save();
    	
    	return back();
    }

    public function showMessage()
    {
    	$messages = Contact::all();

    	return view('admin.sitesetting.messagecontact', compact('messages'));
    }
}
