<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('email_verified_at');
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
