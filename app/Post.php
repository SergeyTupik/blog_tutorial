<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }

    public function user()
    {
        return $this->belongsTo(User::class)->latest();
    }

    public function addComment($body, $user_id)
    {
        Comment::create([

            'post_id' => $this->id,
            'body' => $body,
            'user_id' => $user_id
        ]);
    }

}
