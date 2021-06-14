<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forums;
use App\Models\comment;
use App\Models\market;
use App\Models\mComment;
use App\Models\users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = forums::latest()->take(5)->get();
        $products = market::latest()->take(5)->get();
        return view('home',[
            'posts' => $posts,
            'products' => $products,
        ]);
    }
    
    public function profile()
    {
        $user = auth()->user();
        $id = $user->id;
        $posts = forums::where('user_id',$id)->get();
        $products = market::where('user_id',$id)->get();
        return view('profile',[
            'user'=>$user,
            'posts' => $posts,
            'products' => $products,
        ]);
    }
}
