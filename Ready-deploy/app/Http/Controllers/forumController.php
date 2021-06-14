<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forums;
use App\Models\comment;
use App\Models\users;
use Illuminate\Support\Str;

class forumController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function show()
    {
        $posts = forums::latest();
        return view('forums.view',[
            'posts' => $posts->paginate(7),
        ]);
    }
    
    public function create()
    {
        return view('forums.create');
    }
    
    public function inc($id)
    {
        $post = forums::find($id);
        $awal = $post->vote;
        forums::where('id',$post->id)
                ->update([
                    'vote'=> $awal + 1,
                ]);
        return back();
    }
    
    public function dec($id)
    {
        $post = forums::find($id);
        $awal = $post->vote;
        forums::where('id',$post->id)
                ->update([
                    'vote'=> $awal - 1,
                ]);
        return back();
    }
    
    public function detail($id)
    {
        $post = forums::find($id);
        $komen = comment::where('commentable_id', $id)->get();
        if (comment::where('commentable_id', $id)->exists()) { 
            $last = comment::where('commentable_id', $id)->latest('created_at')->first();
            $lastt = $last->created_at;
            }
        else { $lastt = NULL; }
        $id = $post->user_id;
        $userPost = users::find($id);
        
        return view('forums.details',compact('post','userPost', 'komen', 'lastt'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'topic' => 'required',
            'title' => 'required',
            'deskripsi' => 'required',
            'vote' => 'required',
            'foto' => request('foto') ? 'image|mimes:jpeg,png,gif' : ''
        ]);
        
        $topik = $request->topic;
        $slug = Str::slug($topik);
        
        if ($request->foto) {
            $thumbnail = request()->file('foto');
            $fotoUrl = $thumbnail->storeAs("Images/post","{$slug}.{$thumbnail->extension()}");
        }
        else $fotoUrl = NULL;
        
        forums::create([
            'user_id' => $request->user_id,
            'topic' => $topik,
            'slug' => $slug,
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'vote' => $request->vote,
            'foto' => $fotoUrl,
        ]);
        
        return redirect('/forum');
    }
}
