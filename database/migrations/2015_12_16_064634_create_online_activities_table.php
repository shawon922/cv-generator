<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_activities', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable(); //First create user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); //Then describe the reference of user_id
            $table->string('link');
            $table->tinyInteger('link_visibility')->default('1');
            $table->text('description');
            $table->tinyInteger('description_visibility')->default('1');
            $table->tinyInteger('type');
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
        Schema::drop('online_activities');
    }
}
