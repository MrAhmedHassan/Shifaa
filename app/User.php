<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use willvincent\Rateable\Rateable;

class User extends Authenticatable
{
    use Rateable;
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar',
        'DoctorCertificate','category_id' ,
        'doctor_id_assistant'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles()
{
    return $this->hasMany(Article::class,'user_id');
}

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class,'user_id');
    }


    public function reveals()
    {
        return $this->hasMany(Reveal::class,'doctor_id');
    }

    public function assistants(){
        return $this->hasMany(User::class , 'doctor_id_assistant');
    }

    public function doctor(){
        return $this->belongsTo(User::class , 'doctor_id_assistant');
    }

    public function patientReservations(){
        return $this->hasMany(Reservation::class,'patient_id');
    }

    public function doctorReservations(){
        return $this->hasMany(Reservation::class,'doctor_id');
    }




}
