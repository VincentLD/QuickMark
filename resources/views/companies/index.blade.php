@extends('layouts.layout')

@section('content')
    <div class="container">
        <h3 class="mb-1">Liste des entreprises enregistrées</h3>
        <p class="mb-5">Contactez l'administrateur pour l'ajout d'une nouvelle entreprise.</p>
        <div class="table-responsive table-student">
            <table class="table">
                <thead class=" text-primary">
                <tr>
                    <th> #</th>
                    <th> Nom </th>
                    <th> Adresse </th>
                    @if(Auth::user()->is_admin)
                        <th class="pl-3"> Action </th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td> {{ $company -> id }}</td>
                        <td> {{ $company -> name }}</td>
                        <td> {{ $company -> adress }}</td>
                        @if(Auth::user()->is_admin)
                            <td>
                                <a href="/companies/{{$company->id}}/edit"><button class="btn btn-warning btn-fab btn-icon btn-round"><i class="fas fa-pencil-alt"></i></button></a>
                                <a href="/companies/{{$company->id}}/delete"><button class="btn btn-danger btn-fab btn-icon btn-round"><i class="fas fa-times"></i></button></a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
