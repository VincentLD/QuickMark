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
                'title' => '(E1) Culture générale',
                'coefficient' => 2,
            ],

            [
                'title' => '(E1) Anglais',
                'coefficient' => 2,
            ],

            [
                'title' => '(E2) Mathématiques',
                'coefficient' => 2,
            ],

            [
                'title' => '(E2) Algorithmique appliquée',
                'coefficient' => 1,
            ],

            [
                'title' => '(E3) Analyse économique, managériale et juridique des services informatiques',
                'coefficient' => 3,
            ],

            [
                'title' => '(E4) Conception et maintenance des solutions informatiques',
                'coefficient' => 4,
            ],

            [
                'title' => '(E5) Production et fourniture de services informatiques ',
                'coefficient' => 5,
            ],

            [
                'title' => '(E6) Parcours de professionnalisation',
                'coefficient' => 3,
            ],
        ];

        foreach($exams as $exam)
            \App\Exam::create($exam);
    }
}
