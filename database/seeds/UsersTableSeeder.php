<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bojan Kolano',
            'email' => 'bojan19941@hotmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
