<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

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
        return view('edituser');
    }


    public function edit()
    {
       
        return view('edituser');
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
        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255' . $users->id,
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        $hashedPassword = Auth::user()->password;
        
 
       if (\Hash::check($request->oldpassword , $hashedPassword )) {
 
          $users =users::find(Auth::user()->id);
          $users->password = bcrypt($request->password);
          users::where( 'id' , Auth::user()->id)->update( array( 'password' =>  Hash::make($request->password)));

          session()->flash('message','password updated successfully');
 
           }
 
          else{
               session()->flash('message','old password doesnt matched ');
               dd('error');
             }
        $nama = $request->name;
        $thumbnail = request()->file('foto');
        $fotoUrl = $thumbnail->storeAs("Images/user","{$nama}.{$thumbnail->extension()}");
        
        users::where('id', auth()->user()->id)
                ->update([
                    'name'=> $nama,
                    'email'=> $request->email,
                    'address'=> $request->address,
                    'phone_number'=> $request->phone_number,
                    'tag'=> $request->tag,
                    'desc'=> $request->desc,
                    'foto' => $fotoUrl,
                ]);
        return redirect('/edituser')->with('status','data mahasiswa berhasil diperbaharui!');
    }

    public function show($id)
    {
        return $id;
    }

}
