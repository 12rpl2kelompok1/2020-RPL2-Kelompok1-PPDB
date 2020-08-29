<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_name');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('addres');
            $table->string('last_school');
            $table->string('fathers_name');
            $table->string('fathers_occupation');
            $table->string('mothers_name');
            $table->string('mothers_occupation');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
