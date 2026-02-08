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
            $table->string('surname');
            $table->string('patronymic');
            $table->string('login');
            $table->string('email')->unique();
            $table->string('age');
            $table->string('password');
            $table->string('work experience');
            $table->string('photo');
            $table->string('phone number');
            $table->string('specialization');
            $table->string('summary');
            $table->string('number of responses');
            $table->string('responses');
            $table->string('users vacancies');
            $table->string('responses to user vacancies');
            $table->string('the number of responses to user vacancies');
            $table->string('chats');
            $table->string('viewed vacancies');
            $table->string('favourites');
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
