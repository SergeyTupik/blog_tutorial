<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), [
            'body' => 'required|min:2|max:500'
        ]);

        $post->addComment(request('body'), auth()->user()->id);

        return back();
    }
}
