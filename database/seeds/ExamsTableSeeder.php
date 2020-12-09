<?php

use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exams = [
            [
                'ref' => 'U11',
                'title' => 'Culture générale et expression',
                'coefficient' => 2,
            ],

            [
                'ref' => 'U12',
                'title' => 'Expression et communication en langue anglaise',
                'coefficient' => 2,
            ],

            [
                'ref' => 'U21',
                'title' => 'Mathématiques',
                'coefficient' => 2,
            ],

            [
                'ref' => 'U22',
                'title' => 'Algorithmique appliquée',
                'coefficient' => 1,
            ],

            [
                'ref' => 'U3',
                'title' => 'Analyse économique, managériale et juridique des services informatiques',
                'coefficient' => 3,
            ],

            [
                'ref' => 'U4',
                'title' => 'Conception et maintenance des solutions informatiques',
                'coefficient' => 4,
            ],

            [
                'ref' => 'U5',
                'title' => 'Production et fourniture de services informatiques ',
                'coefficient' => 5,
            ],

            [
                'ref' => 'U6',
                'title' => 'Parcours de professionnalisation',
                'coefficient' => 3,
            ],
        ];

        foreach($exams as $exam)
            \App\Exam::create($exam);
    }
}
