@extends('layouts.layout')

@section('content')
    <div class="container">
        <h3>Liste des matières enregistrées</h3>
        <div class="table-responsive table-student">
            <table class="table">
                <thead class=" text-primary">
                <tr>
                    <th> #</th>
                    <th class="w-50"> Matiere</th>
                    <th> Coefficient </th>
                    @if(Auth::user()->is_admin)
                        <th> Action </th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach ($matieres as $matiere)
                    <tr>
                        <td> {{ $matiere -> id }}</td>
                        <td> {{ $matiere -> title }}</td>
                        <td> {{ $matiere -> coefficient }}</td>
                        @if(Auth::user()->is_admin)
                            <td>
                                <a href="/matieres/{{$matiere->id}}/edit"><button class="btn btn-warning btn-fab btn-icon btn-round"><i class="fas fa-pencil-alt"></i></button></a>
                                <a href="/matieres/{{$matiere->id}}/delete"><button class="btn btn-danger btn-fab btn-icon btn-round" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette matière ?');"><i class="fas fa-times"></i></button></a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
