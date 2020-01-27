<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['patientName','phone','patient_id','reveal_id'];

    public function reveal (){
        $this->belongsTo(Reveal::class,'reveal_id');
    }

    public function user(){
        $this->belongsTo(User::class,'patient_id');
    }
}
