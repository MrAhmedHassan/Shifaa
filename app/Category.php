<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'description',
    ];

    public function diseases()
    {
        return $this->hasMany('App\Disease');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
