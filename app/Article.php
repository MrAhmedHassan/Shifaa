<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use BeyondCode\Comments\Traits\HasComments;

class Article extends Model
{
    use HasComments;
    protected $fillable = ['title', 'description','avatar','user_id'];

    public function user()
{
    return $this->belongsTo(User::class);
}

}




