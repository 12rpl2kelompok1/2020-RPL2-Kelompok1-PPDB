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
        	'name' => 'Pak Yana',
        	'email' => 'yana@gmail.com',
        	'password' => '123'

        ]);
    }
}
