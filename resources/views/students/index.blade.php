@extends('layouts.layout')

@section('content')
<div class="container">
    <h3>Liste des élèves enregistrés</h3>
    <div class="table-responsive table-student">
        <table class="table">
            <thead class=" text-primary">
            <tr>
                <th> #</th>
                <th> Prénom</th>
                <th> Nom </th>
                <th> Email </th>
                <th> Né le </th>
                <th> Option </th>
                <th> INSEE </th>
                @if(Auth::user()->is_admin)
                    <th> Action </th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
            <tr>
                <td> {{ $student -> id }}</td>
                <td> {{ $student -> firstname }}</td>
                <td> {{ $student -> lastname }}</td>
                <td> {{ $student -> email }}</td>
                <td> {{ \Carbon\Carbon::parse($student->birthdate)->format('d-m-Y') }}</td>
                <td> {{ $student -> option }}</td>
                <td> {{ $student -> insee }}</td>
                @if(Auth::user()->is_admin)
                    <td>
                        <a href="/students/{{$student->id}}/edit"><button class="btn btn-warning btn-fab btn-icon btn-round"><i class="fas fa-pencil-alt"></i></button></a>
                        <a href="/students/{{$student->id}}/delete"><button class="btn btn-danger btn-fab btn-icon btn-round" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?');"><i class="fas fa-times"></i></button></a>
                    </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
