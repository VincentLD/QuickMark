<?php

namespace App\Http\Controllers;

use App\Internship;
use App\Student;
use Illuminate\Http\Request;

class SyntheseController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('student') !== null) {
            $selectedStudent = Student::where('id', $request->input('student'))->first();
            $stageStudent = Internship::where('student_id', $request->input('student'))->first();
        } else {
            $selectedStudent = null;
            $stageStudent = null;
        }

        $students = Student::all()->sortBy('lastname');

        return view('synthese.index', [
            'students' => $students,
            'selectedStudent' => $selectedStudent,
            'stageStudent' => $stageStudent,
        ])
        ;
    }
}
