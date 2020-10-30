<?php

namespace App\Http\Controllers;

use App\Company;
use App\Internship;
use App\Student;
use Illuminate\Http\Request;

class InternshipsController extends Controller
{
    public function index() {
        $students = Student::all()->sortBy('lastname');
        $companies = Company::all()->sortBy('name');
        $stages = Internship::all();

        return view('internships.index', [
            'students' => $students,
            'companies' => $companies,
            'stages' => $stages,
        ]);
    }

    public function store(Request $request) {

        Internship::create($request->validate([
            'student_id' => 'required',
            'company_id' => 'required',
            'opinion' => '',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
        ]));

        return redirect()->back()->with('toast_success', 'Stage ajouté');
    }
}

