<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_qualifications', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable(); //First create user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); //Then describe the reference of user_id
            $table->string('institution');
            $table->tinyInteger('institution_visibility')->default('1');
            $table->string('degree');
            $table->tinyInteger('degree_visibility')->default('1');
            $table->string('field_of_study')->nullable();
            $table->tinyInteger('field_of_study_visibility')->default('1');
            $table->tinyInteger('duration');
            $table->tinyInteger('duration_visibility')->default('1');
            $table->string('division', 20)->nullable();
            $table->tinyInteger('division_visibility')->default('1');
            $table->string('grade', 4)->nullable();
            $table->tinyInteger('grade_visibility')->default('1');
            $table->string('cgpa', 4)->nullable();
            $table->tinyInteger('cgpa_visibility')->default('1');
            $table->integer('start');
            $table->tinyInteger('start_visibility')->default('1');
            $table->integer('end');
            $table->tinyInteger('end_visibility')->default('1');
            $table->text('activities')->nullable();
            $table->tinyInteger('activities_visibility')->default('1');
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
        Schema::drop('academic_qualifications');
    }
}
