<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Student;
use Illuminate\Http\Request;

class Exam_StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        $exams = Exam::all();
        return view('gestionNotes.index', [
            'students' => $students,
            'exams' => $exams,
        ]);
    }

    public function store(Request $req) {
        $student =Student::find($req->student);
        $exam = Exam::find($req->exam);

        $student->exams()->attach($exam, [
            'mark' => $req->mark,
            'appreciation' => $req->appreciation,
        ]);

        return redirect()->back()->with('toast_success', 'Note ajoutée');
    }
}
