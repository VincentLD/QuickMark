<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];
    protected $table = "students";


    public function exams() {
        return $this->belongsToMany(Exam::class)
            ->withPivot(['mark','appreciation','id'])
            ->using(ExamStudent::class);
    }
/*
    public function examStudents() {
        return $this->hasMany(ExamStudent::class);
    }
*/
    public function internships() {
        return $this->hasMany(Internship::class);
    }
}
