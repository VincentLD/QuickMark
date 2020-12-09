<br>
<br>
<div class="container">
    <h3 class="text-xl-center">Synthèse de {{ strtoupper($selectedStudent->lastname) }} {{ $selectedStudent->firstname }}</h3>
    <div class="parent">
        <table class="table table-bordered">
            <tr>
                <td colspan="3" >EXAMEN: BREVET DE TECHNICIEN SUPÉRIEUR</td>
                <td rowspan="2" >Année de l'examen<br /> {{ date('Y') }} </td>
                <td colspan="3" >NOM(lettres capitales) <br />{{strtoupper($selectedStudent->lastname)}}</td>
                <td colspan="3" >PRENOM <br />{{ucfirst($selectedStudent->firstname)}}</td>
                <td >ÉTABLISSEMENT Lycée Félix Le Dantec - Lannion</td>
            </tr>
            <tr>
                <td colspan="3">
                    Spécialité : SERVICES INFORMATIQUES AUX ORGANISATIONS<br />
                    Option : B - solutions logicielles et applications métiers
                </td>
                <td colspan="3">DATE de NAISSANCE <br />{{\Carbon\Carbon::parse($selectedStudent->birthdate)->format('d-m-Y')}}</td>
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
            <tr>
                <td>Référence de l'unité constitutive</td>
                <td>Coef</td>
                <td colspan="3">Intitulé de l'unité constitutive</td>
                <td >CCF ou par épreuve ou sous épreuve ponctuelle passée</td>
                <td colspan="2">Ou note obtenue par le contrôle continue</td>
                <td colspan="3">Appréciations</td>
            </tr>
            @foreach($selectedStudent->exams as $exam)
            <tr>
                <td>{{ $exam->ref }}</td>
                <td>{{ $exam->coefficient }}</td>
                <td colspan="3">{{ $exam->title }}</td>
                <td> //</td>
                <td colspan="2"> {{ $exam->pivot->mark }}</td>
                <td colspan="3"> {{ $exam->pivot->appreciation }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3"> Eléments complémentaires portés à la connaissance du jury pour tenir
                    compte de l’assiduité, de la motivation et de l’engagement du candidat</td>
                <td colspan="8"></td>
            </tr>
        </table>
        <h5>Récapitulatif des périodes de stages (4 semaines minimum sur la durée de la formation)</h5>
        <table class="table table-bordered border-">
            <tr>
                <td colspan="2"></td>
                <td colspan="3">Nom et adresse de l’entreprise ou organisme</td>
                <td>Dates</td>
                <td colspan="5">Appréciation des professeurs comprenant, le cas échéant, le dossier professionnel élaboré par le candidat</td>
                <td colspan="2">Remarques</td>
            </tr>
            @foreach($stageStudent as $stage)
            <tr>
                <td colspan="2">
                    @if(date('Y', strtotime($stage->date_start)) < date("Y"))
                        1ere année
                    @else
                    2eme année
                    @endif
                </td>
                <td colspan="3">{{ $stage->company->name }} {{$stage->company->adress}}</td>
                <td> {{ $stage->date_start }}</td>
                <td colspan="5"> {{ $stage->opinion }}</td>
                <td colspan="2"></td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2">AVIS DU CONSEIL DE CLASSE ET OBSERVATIONS EVENTUELLES</td>
                <td colspan="5">COTATION DE LA CLASSE</td>
                <td colspan="4">RÉSULTAT DE LA SECTION LES 3 DERNIÈRES ANNÉES</td>
                <td>Visa du chef d'établissement et remarques éventuelles</td>
                <td>Date et visa du président du jury</td>
            </tr>
            <tr>
                <td rowspan="2">{{ $selectedStudent->generalOpinion }}</td>

                <td>Répartition en %</td>
                <table>
                    <tr>Avis</tr>
                    <tr>
                        <td>Très favorable</td>
                        <td>Favorable</td>
                        <td>Doit faire ses preuves</td>
                    </tr>
                </table>
                <td>Effectif total de la classe</td>
            </tr>
        </table>
    </div>
</div>
