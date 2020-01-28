<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    protected $fillable = ['reveal_id','patient_id','doctor_id'];

    public function reveal(){
      return  $this->belongsTo(Reveal::class,'reveal_id');
    }

    public function patient(){
      return  $this->belongsTo(User::class,'patient_id');
    }

    public function doctor(){
        return $this->belongsTo(User::class,'doctor_id');
    }
}
