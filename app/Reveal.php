<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reveal extends Model
{
    protected $fillable = ['day','time','limit','doctor_id'];


    public function doctor()
    {
        return $this->belongsTo(User::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class,'reveal_id');
    }
}
