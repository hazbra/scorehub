<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned()->index();
            $table->string('team_name');
            $table->integer('goal')->default(0)->nullable();
            $table->integer('point')->default(0)->nullable();
            $table->integer('try_score')->default(0)->nullable();
            $table->integer('conversion')->default(0)->nullable();
            $table->integer('penalty')->default(0)->nullable();
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
        Schema::drop('scores');
    }
}
