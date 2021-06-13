<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forums;
use Illuminate\Support\Str;

class forumController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function show()
    {
        return view('forums.view');
    }
    
    public function create()
    {
        return view('forums.create');
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
        
        $Forum = forums::create([
            'topic' => request('topic'),
            'slug' => Str::slug(request('topic')),
            'title' => request('title'),
            'deskripsi' => request('deskripsi'),
            'vote' => request('vote'),
            'foto' => request() -> file('foto')-> store('images/forum')
        ]);
        
        return back() -> with('succes','bisa cok');
    }
}
