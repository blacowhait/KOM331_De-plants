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
     
    public function search() 
    {
        $query = request('query');
        
        $posts = forums::where("slug", "like", "%$query%")->latest()->paginate(5);
        $products = market::where("slug", "like", "%$query%")->latest()->paginate(5);
        return view('home',[
            'posts' => $posts,
            'products' => $products,
        ]);
    } 
     
    public function deletePost($id)
    {
        $user = auth()->user();
        $userId = $user->id;
        $komen = comment::where('commentable_id',$id)->get();
        $post = forums::where('id',$id)->first();
        //dd($post);
        if ($userId === $post->user_id) {
            $komen->each->delete();
            $post->delete();
        }
        
        $posts = forums::where('user_id',$userId)->get();
        $products = market::where('user_id',$userId)->get();
        return view('profile',[
            'user'=>$user,
            'posts' => $posts,
            'products' => $products,
        ]);
    } 
    
    public function deleteProduct($id)
    {
        $user = auth()->user();
        $userId = $user->id;
        $komen = mComment::where('commentable_id',$id)->get();
        $post = market::where('id',$id)->first();
        //dd($post->user_id);
        if ($userId === $post->user_id) {
            $komen->each->delete();
            $post->delete();
        }
        
        $posts = forums::where('user_id',$userId)->get();
        $products = market::where('user_id',$userId)->get();
        return view('profile',[
            'user'=>$user,
            'posts' => $posts,
            'products' => $products,
        ]);
    }
     
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
