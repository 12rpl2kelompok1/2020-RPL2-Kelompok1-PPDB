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
            'id' => '1',
            'id_level' => '0',
        	'name' => 'caca',
        	'email' => 'caca@gmail.com',
        	'email_verified_at' => 'caca@gmail.com',
        	'password' => Hash::make('12345678')

        ]);

        DB::table('users')->insert([
            'id' => '2', 
            'id_level' => '1',
            'name' => 'Hamdan Firmansyah,S.Pd',
            'email' => 'admin@gmail.com',
            'email_verified_at' => 'admin@gmail.com',
            'password' => Hash::make('12345')


        ]);
    }
}
