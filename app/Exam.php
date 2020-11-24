<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsToMany('App\User');
    }

    public function student() {
        return $this->belongsToMany('App\Student');
    }
}
