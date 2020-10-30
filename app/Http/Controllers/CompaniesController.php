<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index() {
        $companies = Company::all();

        return view('companies.index', [
            'companies' => $companies
        ]);
    }

    public function create() {
        return view('companies.create');
    }

    public function store() {
        Company::create(request()->validate([
            'name' => 'required',
            'adress' => 'required'
        ]));

        return redirect()->back()->with('toast_success', ' Entreprise ajoutée');
    }

    public function edit($id) {
        $company = Company::find($id);

        return view('companies.edit', [
            'company' => $company
        ]);
    }

    public function update($id) {
        $company = Company::find($id);
        $company->name = request('name');
        $company->adress = request('adress');
        $company->save();

        return redirect('/liste-entreprises');
    }

    public function destroy($id) {
        $company = Company::find($id);
        $company->delete();

        return redirect('/liste-entreprises');
    }
}
