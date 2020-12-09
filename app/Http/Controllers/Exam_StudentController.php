<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Student;
use Illuminate\Http\Request;

class Exam_StudentController extends Controller
{
    public function index() {
        $students = Student::all()->sortBy('lastname');
        $exams = Exam::all();
        return view('gestionNotes.index', [
            'students' => $students,
            'exams' => $exams,
        ]);
    }

    public function store(Request $req) {
        $student = Student::where('id', $req->student)->first();
        $exam = Exam::where('id', $req->exam)->first();

        $student->exams()->attach($exam, [
            'mark' => $req->mark,
            'appreciation' => $req->appreciation,
        ]);

        return redirect()->back()->with('toast_success', 'Note ajoutée');
    }
}
