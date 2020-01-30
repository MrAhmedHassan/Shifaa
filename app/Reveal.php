<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reveal extends Model
{
    use SoftDeletes;

    protected $fillable = ['date','from','to','limit','doctor_id'];


    public function doctor()
    {
        return $this->belongsTo(User::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class,'reveal_id');
    }
}
