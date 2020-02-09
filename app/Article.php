<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use BeyondCode\Comments\Traits\HasComments;

class Article extends Model
{
    protected $fillable = ['title', 'description','avatar','user_id'];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function comments()
{
    return $this->hasMany(Comment::class, 'article_id');
}

public function category()
{
    return $this->belongsTo(Category::class);
}

}




