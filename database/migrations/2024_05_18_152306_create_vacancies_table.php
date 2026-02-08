<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('specialization');
            $table->string('minimum_age');
            $table->string('maximum_age');
            $table->string('photo');
            $table->string('type_of_payment');
            $table->string('address');
            $table->string('town');
            $table->string('coordinates');
            $table->string('the_ability_to_work_remotely');
            $table->string('description');
            $table->string('work_experience');
            $table->string('work_schedule');
            $table->string('phone_number');
            $table->string('telegram');
            $table->string('pay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
