<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Internship;
use App\Student;
use Illuminate\Http\Request;

class SyntheseController extends Controller
{
    public function index(Request $request)
    {
        // Si l'utilisateur a choisi un élève
        if ($request->input('student') !== null) {
            $currentStudent = $request->input('student');
            $selectedStudent = Student::where('id', $currentStudent)->first();
            $stageStudent = Internship::where('student_id', $currentStudent)->orderby('date_start')->get();
        } else {
            $selectedStudent = null;
            $stageStudent = null;
        }

        $students = Student::all()->sortBy('lastname');
        $exams = Exam::all()->sortBy('name');

        return view('synthese.index', [
            'students' => $students,
            'exams' => $exams,
            'selectedStudent' => $selectedStudent,
            'stageStudent' => $stageStudent,
        ]);
    }
}
