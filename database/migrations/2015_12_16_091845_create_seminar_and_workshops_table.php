<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarAndWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar_and_workshops', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable(); //First create user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); //Then describe the reference of user_id
            $table->string('seminar_title');
            $table->tinyInteger('seminar_title_visibility')->default('1');
            $table->string('organized_by')->nullable();
            $table->tinyInteger('organized_by_visibility')->default('1');
            $table->string('venue')->nullable();
            $table->tinyInteger('venue_visibility')->default('1');
            $table->tinyInteger('priority')->default('0');
            $table->tinyInteger('visibility')->default('1');
            $table->tinyInteger('status')->default('1');
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
        Schema::drop('seminar_and_workshops');
    }
}
