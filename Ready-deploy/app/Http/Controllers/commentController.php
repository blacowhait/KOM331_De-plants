<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forums;
use App\Models\comment;
use App\Models\users;

class commentController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'body' => 'required',
        ]);
        
        $comment = new comment;
        $comment->body = $request->get('body');
        $comment->user()->associate($request->user());
        $post = forums::find($request->get('post_id'));
        $post->comments()->save($comment);

        return back();
    }
}
