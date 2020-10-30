<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(ExamsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
    }
}
