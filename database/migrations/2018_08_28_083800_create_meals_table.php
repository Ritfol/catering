<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('breakfast_name');
            $table->string('breakfast');
            $table->integer('breakfast_price');
            $table->string('lunch_name');
            $table->string('lunch');
            $table->integer('lunch_price');
            $table->string('dinner_name');
            $table->string('dinner');
            $table->integer('dinner_price');
            $table->string('drink_name');
            $table->string('drink');
            $table->integer('drink_price');
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
        Schema::dropIfExists('meals');
    }
}
