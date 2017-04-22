<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\AddUserRequestAdmin;

use App\User;
use App\Http\Controllers\Redirect;

class UsersController extends Controller
{

    //========= view all users ============ 

    public function index()
    {
    	$user = User::all();
    	return view('admin.users.index', compact('user'));
    }

    //========= view page add user ========

    public function create()
    {
    	return view('admin.users.add');
    }


    //=============== store user information in database

    public function store(AddUserRequestAdmin $request, User $user)
    {
    	 User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

    	 return redirect('adminpanel/users'.$user->id);
    }

    //============ view page Edit user ==========

    public function edit($id)
    {
    	
    	$user = User::find($id);
    	return view('admin.users.edit', compact('user'));
    }


    // ============== Update user information =========

    public function update($id)
    {
    	   
    	User::find($id)->update(request()->all());
    	
    	return redirect('/adminpanel/users/');
    }


    // =========== Delete User =======================

    public function destroy($id)
    {

    	User::find($id)->delete();
    	
    	return back();
    }

}
