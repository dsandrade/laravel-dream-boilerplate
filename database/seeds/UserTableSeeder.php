<?php

use Illuminate\Database\Seeder;
use Dream\Boilerplate\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name'     => 'Dream',
            'email'    => 'boilerplate@dream.com.br',
            'password' => Hash::make('Test123'),
        ]);
    }
}
