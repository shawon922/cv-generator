<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingAndCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_and_certifications', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable(); //First create user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); //Then describe the reference of user_id
            $table->string('institution');
            $table->tinyInteger('institution_visibility')->default('1');
            $table->string('course_title')->nullable();
            $table->tinyInteger('course_title_visibility')->default('1');
            $table->tinyInteger('duration');
            $table->tinyInteger('duration_visibility')->default('1');
            $table->integer('start');
            $table->tinyInteger('start_visibility')->default('1');
            $table->integer('end');
            $table->tinyInteger('end_visibility')->default('1');
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
        Schema::drop('training_and_certifications');
    }
}
