<?php

namespace App\Models;

use Dom\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //------------ Campos ------------//
    protected $fillable = [
        'title',
        'slug',
        'image_path',
        'excerpt',
        'content',
        'is_published',
        'published_at',
        'user_id',
        'category_id'
    ];
    //------------ Formatos ------------//
    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime'
    ];
    //------------ Relaciones ------------//    
    public function category() // uno a muchos indirecta
    {
        return $this->belongsTo(Category::class);
    }
    public function user()  // uno a muchos indirecta
    {
        return $this->belongsTo(User::class);
    }
    public function comments() // uno a muchos directa
    {
        return $this->hasMany(Comment::class);
    }
    public function tags() // muchos a muchos directa
    {
        return $this->hasMany(Tag::class);
    }
}
