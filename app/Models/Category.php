<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //------------ Campos ------------//
    protected $fillable = [
        'name',
    ];
    //------------ Relaciones ------------//
    public function posts() // uno a muchos directa
    {
        return $this->hasMany(Post::class);
    }
}
