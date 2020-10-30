<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $guarded = [];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
