<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Sitesetting;
use Illuminate\Support\Facades\Redirect;

class Sitesettingcontroller extends Controller
{
    public function index()
    {
    	$settings = Sitesetting::all();
    	return view('admin.sitesetting.index', compact('settings'));
    }




    public function update(Request $request, Sitesetting $sitesetting)
    {


    	foreach(array_except($request->toArray() , ['_token', 'submit']) as $key => $req){

        $sitesettingupdate = new $sitesetting;
    	$sitesettingupdate = $sitesetting->where('settingname', $key)->get()[0];
    		
    	$sitesettingupdate->fill(array('value' => $req))->save();
    	 }

    	return Redirect::back();

    }
}
