<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['from', 'to','result','test_id'];
    // protected $fillable = ['fromm', 'too','result','test_id'];
    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
