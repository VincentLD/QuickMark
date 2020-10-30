<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('students.index', [
            'students' => $students
        ]);
    }

    public function create()
    {
        if(Auth::user()->is_admin) {
        return view('students.create');
        }

        else {
            return redirect()->back()->with('error', 'Vous n\'avez pas accès au panel d\'administration');
        }
    }


    public function store(Request $request)
    {
        Student::create(request()->validate( [
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'option' => '',
            'birthdate' => 'required|date',
            'insee' => 'required|digits:14',
        ]));
        return redirect()->back()->with('toast_success', ' Etudiant ajouté');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', [
            'student' => $student
        ]);
    }


    public function update($id)
    {
        $student = Student::find($id);

        $student->lastname = request('lastname');
        $student->firstname = request('firstname');
        $student->birthdate = request('birthdate');
        $student->email = request('email');
        $student->option = request('option');
        $student->insee = request('insee');

        $student->save();

        return redirect('/liste-eleves');
    }


    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/liste-eleves');
    }
}
