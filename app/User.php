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
        'name', 'email', 'password', 'avatar', 'DoctorCertificate','category_id'
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

    
    public function reveals()
    {
        return $this->hasMany(Reveal::class,'doctor_id');
    }



}
