<div class="container">
    <hr>
    <h3>Liste des stages</h3>
    <div class="table-responsive table-student">
        <table class="table">
            <thead class=" text-primary">
            <tr>
                <th> #</th>
                <th> Étudiant</th>
                <th> Entreprise </th>
                <th> Date début </th>
                <th> Date fin </th>
                <th> Action </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($stages as $stage)
                <tr>
                    <td> {{ $stage -> id }}</td>
                    <td> {{ $stage -> student->lastname }} {{ $stage -> student->firstname }}</td>
                    <td> {{ $stage -> company->name }}</td>
                    <td> {{ $stage -> date_start }}</td>
                    <td> {{ $stage -> date_end }}</td>
                    <td>
                        <a href="/stages/{{$stage->id}}/edit"><button class="btn btn-warning btn-fab btn-icon btn-round"><i class="fas fa-pencil-alt"></i></button></a>
                        <a href="/stages/{{$stage->id}}/delete"><button class="btn btn-danger btn-fab btn-icon btn-round" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce stage ?');"><i class="fas fa-times"></i></button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
