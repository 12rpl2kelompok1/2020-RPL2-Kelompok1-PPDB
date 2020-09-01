<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('students')->insert([
            'student_id' => '1',
            'id_user' => '1',
            'ln_id' => '1',
        	'student_name' => 'caca',
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
