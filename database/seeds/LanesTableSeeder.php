<?php

use Illuminate\Database\Seeder;

class LanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('lanes')->insert([
        	'ln_name' => 'Jalur Normal'

        ]);
    }
}
