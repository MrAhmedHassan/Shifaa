<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'questionEnglish','user_id'];
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
