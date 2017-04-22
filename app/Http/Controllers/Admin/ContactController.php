<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{


    public function store()

    {
        Contact::create(request(['name', 'email', 'message']))->save();
    	

        session()->flash('message', 'The message has been sent !');
    	return back();
        
    }

    public function showMessage()
    {
    	$messages = Contact::all();

    	return view('admin.sitesetting.messagecontact', compact('messages'));
    }
}
