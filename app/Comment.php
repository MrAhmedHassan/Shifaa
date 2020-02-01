<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment','user_id','article_id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
}
