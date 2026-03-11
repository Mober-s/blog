<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //------------ Campos ------------//
    protected $fillable = [
        'name',
    ];
    //------------ Relaciones ------------//    
    public function posts() // muchos a muchos directa
    {
        return $this->hasMany(Post::class);
    }
}
