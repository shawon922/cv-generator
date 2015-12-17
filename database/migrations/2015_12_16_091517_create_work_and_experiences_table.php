<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkAndExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_and_experiences', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable(); //First create user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); //Then describe the reference of user_id
            $table->string('company_name');
            $table->tinyInteger('company_name_visibility')->default('1');
            $table->string('job_position');
            $table->tinyInteger('job_position_visibility')->default('1');
            $table->integer('start');
            $table->tinyInteger('start_visibility')->default('1');
            $table->integer('end');
            $table->tinyInteger('end_visibility')->default('1');
            $table->text('description')->nullable();
            $table->tinyInteger('description_visibility')->default('1');
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
        Schema::drop('work_and_experiences');
    }
}
