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
        	'name' => 'caca',
        	'email' => 'caca@gmail.com',
        	'email_verified_at' => 'caca@gmail.com',
        	'password' => Hash::make('12345678')

        ]);
    }
}
