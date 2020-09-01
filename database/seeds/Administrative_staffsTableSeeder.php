<?php

use Illuminate\Database\Seeder;

class Administrative_staffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrative_staffs')->insert([
            'staff_id' => '1',
            'id_user' => '2',
        	'name' => 'Pak Ganay',
        	'email' => 'yana@gmail.com',
        	'password' => Hash::make('12345')

        ]);
    }
}
