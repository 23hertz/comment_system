<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'title', 'body', 'writer',
    ];

    public function comments(){
       return $this->hasMany(Comment::class);
    }

    public function addReview($body)
    {
        $this->reviews()->create(['body' => $body]);
    }

   /* public function addReview($body, $userid)
    {
        $this->comment()->create(['body' => $body, 'user_id' => $userid]);
    }*/

}
