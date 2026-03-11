<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //------------ Campos ------------//
    protected $fillable = [
        'body',
        'post_id',
    ];
    //------------ Relaciones ------------//
    public function post() // uno a muchos indirecta
    {
        return $this->belongsTo(Post::class);
    }
}
