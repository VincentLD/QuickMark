<br>
<br>
<div class="container-fluid">
    <div class="parent">
        <table class="table table-bordered">
            <tr>
                <td colspan="3" >EXAMEN: BREVET DE TECHNICIEN SUPÉRIEUR</td>
                <td rowspan="2" >Année de l'examen<br /><?php date('Y'); ?></td>
                <td colspan="3" >NOM(lettres capitales){{strtoupper($selectedStudent->lastname)}}</td>
                <td colspan="3" >PRENOM {{ucfirst($selectedStudent->firstname)}}</td>
                <td >ÉTABLISSEMENT Lycée Félix Le Dantec - Lannion</td>
            </tr>
            <tr>
                <td colspan="3">
                    Spécialité : SERVICES INFORMATIQUES AUX ORGANISATIONS<br />
                    Option : B - solutions logicielles et applications métiers
                </td>
                <td colspan="3">DATE de NAISSANCE {{$selectedStudent->birthdate}}</td>
                <td colspan="2">
                    N° de l'INSEE<br />
                    {{ $selectedStudent->insee }}
                </td>
                <td colspan="2">LANGUE VIVANTE ANGLAIS</td>
            </tr>
            <tr>
                <td colspan="5">CLASSE DE 2ème année</td>
                <td colspan="6" rowspan="2">Évaluation du candidat</td>
            </tr>
            <tr>
                <td colspan="5">
                    Unités consitutives du diplôme correspondant aux épreuves obligatoires dans l'ordre où elles figurent dans le réglement d'exam
                </td>
            </tr>
        </table>
    </div>
</div>
