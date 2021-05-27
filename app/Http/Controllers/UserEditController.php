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


    //public function edityt($id)
    //{
    //    $data = [
    //        'user' => $this->usermodel->detailData($id),
    //    ];
    //    return view('v_edituser', $data);
    //}


    public function update(Request $request, Users $users)
    {

        users::where('id', auth()->user()->id)
                ->update([
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'address'=> $request->address,
                    'phone_number'=> $request->phone_number,
                    'password'=> $request->password,     
                ]);
        return redirect('/home/edituser')->with('status','data mahasiswa berhasil diperbaharui!');
    }

    public function show($id)
    {
        return $id;
    }

}
