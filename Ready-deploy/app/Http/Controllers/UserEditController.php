<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UserEditController extends Controller
{
    public function store(Request $request)
    {
        $user = new users;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->password = $request->password;

        $user->save();
        return redirect('/home');
    }

	public function __construct()
	{
		$this->users = new users();
	}


    public function index()
    {
        return view('v_edituser');
    }


    public function edit()
    {
       
        return view('v_edituser');
    }


    public function update(Request $request, Users $users)
    {

        users::where('id', auth()->user()->id)
                ->update([
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'address'=> $request->address,
                    'phone_number'=> $request->phone_number,
                    'password'=> $request->password,
                    'profilepict'=> $request->profilepict, 
                    'bio'=> $request->bio
                ]);

        return redirect('/home/edituser')->with('status',"data berhasil diperbaharui!");
    }
    
    public function delete($id)
    {
        users::where('id', auth()->user()->id)->delete();
        return redirect('/');
    }

    public function show($id)
    {
        return $id;
    }

}
