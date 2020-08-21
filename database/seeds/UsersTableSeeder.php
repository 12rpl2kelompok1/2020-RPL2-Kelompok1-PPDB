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
        	'password' => Hash::make('12345678'),
        	'date_of_birth' => 'Bandung, 01 Juli 2004',
        	'gender' => 'Perempuan',
        	'religion' => 'islam',
        	'addres' => 'Bandung',
        	'last_school' => 'smpn 2 Bandung',
        	'fathers_name' => 'Baba',
        	'fathers_occupation' => 'Buruh',
        	'mothers_name' => 'Nana',
        	'mothers_occupation'=> 'IRT'

        ]);
    }
}
