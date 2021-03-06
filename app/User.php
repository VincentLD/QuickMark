<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthdate' => 'datetime:d/m/Y'
    ];

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function exam()
    {
        return $this->belongsToMany('App\Exam');
    }
}
