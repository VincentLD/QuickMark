<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];
    protected $table = "students";


    public function exams() {
        return $this->belongsToMany(Exam::class);
    }

    public function internships() {
        return $this->hasMany(Internship::class);
    }
}
