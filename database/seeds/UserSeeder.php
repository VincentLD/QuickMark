<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'firstname' => 'vincent',
                'lastname' => 'ledoledec',
                'email' => 'v@v.v',
                'password' => bcrypt('v'),
                'is_admin' => true,
                'email_verified_at' => '2012-02-29'
            ],
            [
                'firstname' => 'guest',
                'lastname' => 'guest',
                'email' => 'g@g.g',
                'password' => bcrypt('g'),
                'is_admin' => false,
                'email_verified_at' => '2012-02-29'
            ]
        ];

        foreach($users as $user)
            \App\User::create($user);
    }
}
