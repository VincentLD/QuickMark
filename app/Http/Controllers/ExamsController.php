<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function index() {
        $matieres = Exam::all();
        return view('exams.index', [
            'matieres' => $matieres
        ]);
    }

    public function create() {
        return view('exams.create');
    }

    public function store(Request $request) {
        Exam::create(request()->validate([
            'title' => 'required',
            'coefficient' => 'required|numeric'
        ]));

        return redirect()->back()->with('toast_success', 'Élève ajouté');
    }

    public function edit($id) {
        $matiere = Exam::find($id);
        return view('exams.edit', [
            'matiere' => $matiere
        ]);
    }

    public function update($id) {
        $matiere = Exam::find($id);

        $matiere->title = request('title');
        $matiere->coefficient = request('coefficient');

        $matiere->save();

        return redirect('/liste-matieres');
    }

    public function destroy($id) {
        $matiere = Exam::find($id);
        $matiere->delete();

        return redirect('/liste-matieres');
    }
}
