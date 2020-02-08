<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function person(){

        return  $this->belongsTo(User::class,'rateable_id');
      
    }
}
