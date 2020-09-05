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
            $table->id('student_id');
            $table->foreignId('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreignId('ln_id')->default('1');
            $table->foreign('ln_id')->references('ln_id')->on('lanes');
            $table->string('student_name');
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('addres')->nullable();
            $table->string('last_school')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('fathers_occupation')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('mothers_occupation')->nullable();
            $table->boolean('is_verified')->default('0');
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
