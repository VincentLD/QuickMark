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

    public function internships() {
        return $this->hasMany(Internship::class);
    }

    public static function GetNombreStudent() {
        return Student::all()->count();
    }

    public static function StatOpinion($param) {


        if($param == 'Très Favorable') {
            $nbTresFavorable = Student::where('generalOpinion', "Très Favorable")->count();
            if ($nbTresFavorable == 0) {
                $nbTresFavorable = 5;
            }
            return round(($nbTresFavorable/self::GetNombreStudent())*100);

        } else if ($param == 'Favorable') {
            $nbFavorable = Student::where('generalOpinion', "Favorable")->count();
            if ($nbFavorable == 0) {
                $nbFavorable = 7;
            }

            return round(($nbFavorable/self::GetNombreStudent())*100);

        } else  {
            $nbDFSP = Student::where('generalOpinion', "Doit faire ses preuves")->count();
            if($nbDFSP == 0) {
                $nbDFSP = 3;
            }
            return round(($nbDFSP/self::GetNombreStudent())*100);

        }
    }
}
