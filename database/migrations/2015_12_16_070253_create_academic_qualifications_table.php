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
            $table->string('institution_visibility');
            $table->string('degree');
            $table->string('degree_visibility');
            $table->string('field_of_study')->nullable();
            $table->string('field_of_study_visibility');
            $table->tinyInteger('duration');
            $table->tinyInteger('duration_visibility');
            $table->string('division', 20)->nullable();
            $table->string('division_visibility', 20)->nullable();
            $table->string('grade', 4)->nullable();
            $table->string('grade_visibility', 4)->nullable();
            $table->string('cgpa', 4)->nullable();
            $table->string('cgpa_visibility', 4)->nullable();
            $table->integer('start');
            $table->integer('start_visibility');
            $table->integer('end');
            $table->integer('end_visibility');
            $table->text('activities')->nullable();
            $table->text('activities_visibility')->nullable();
            $table->text('description')->nullable();
            $table->text('description_visibility')->nullable();
            $table->tinyInteger('priority')->default('0');
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
