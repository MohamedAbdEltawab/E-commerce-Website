<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\AddUserRequestAdmin;

use App\User;
use App\Http\Controllers\Redirect;

class UsersController extends Controller
{
    public function index()
    {
    	$user = User::all();
    	return view('admin.users.index', compact('user'));
    }
    public function create()
    {
    	return view('admin.users.add');
    }

    public function store(AddUserRequestAdmin $request, User $user)
    {
    	 $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    	 return redirect('adminpanel/users'.$user->id)->withFlashMessage('User Has Been Added Successfully');
    }

    public function edit($id)
    {
    	
    	$user = User::find($id);
    	return view('admin.users.edit', compact('user'));
    }
    public function update($id, User $user, Request $request)
    {
    	   
    	$userupdated = $user->find($id);
    	$userupdated->update($request->all());
    	return redirect('/adminpanel/users/')->withFlashMessage('Updated Done Successfully');
    }


    public function destroy($id, User $user)
    {
    	$user = $user->find($id);
    	$user->delete();
    	return back();
    }

}
