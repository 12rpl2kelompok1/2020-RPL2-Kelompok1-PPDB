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
            'ln_id' => '1',
        	'ln_name' => 'Jalur Normal'

        ]);
    }
}
