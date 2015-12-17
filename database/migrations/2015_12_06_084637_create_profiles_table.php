<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable(); //First create user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); //Then describe the reference of user_id
            $table->text('present_address')->nullable();
            $table->tinyInteger('present_address_visibility')->default('1');
            $table->text('permanent_address')->nullable();
            $table->tinyInteger('permanent_address_visibility')->default('1');
            $table->date('date_of_birth')->nullable();
            $table->tinyInteger('date_of_birth_visibility')->default('1');
            $table->string('mobile', 15)->nullable();
            $table->tinyInteger('mobile_visibility')->default('1');
            $table->string('phone', 15)->nullable();
            $table->tinyInteger('phone_visibility')->default('1');
            $table->string('skype', 40)->nullable();
            $table->tinyInteger('skype_visibility')->default('1');
            $table->string('father_name', 100)->nullable();
            $table->tinyInteger('father_name_visibility')->default('1');
            $table->string('mother_name', 100)->nullable();
            $table->tinyInteger('mother_name_visibility')->default('1');
            $table->string('country')->nullable();
            $table->tinyInteger('country_visibility')->default('1');
            $table->string('profile_picture')->nullable();
            $table->tinyInteger('profile_picture_visibility')->default('1');
            $table->string('religion', 15)->nullable();
            $table->tinyInteger('religion_visibility')->default('1');
            $table->text('about_me')->nullable();
            $table->tinyInteger('about_me_visibility')->default('1');
            $table->text('career_objective')->nullable();
            $table->tinyInteger('career_objective_visibility')->default('1');
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
        Schema::drop('profiles');
    }
}
