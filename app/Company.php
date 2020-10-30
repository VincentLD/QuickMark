<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name','adress'];

    public function internships() {
        return $this->hasMany(Internship::class);
    }
}
