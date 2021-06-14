<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\market;
use App\Models\mComment;
use App\Models\users;

class MCommentController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'body' => 'required',
        ]);
        
        $comment = new mComment;
        $comment->body = $request->get('body');
        $comment->user()->associate($request->user());
        $post = market::find($request->get('post_id'));
        $post->comments()->save($comment);

        return back();
    }
}
