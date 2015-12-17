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
            $table->text('permanent_address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('skype', 40)->nullable();
            $table->string('father_name', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->string('country')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('religion', 15)->nullable();
            $table->text('about_me')->nullable();
            $table->text('career_objective')->nullable();
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
