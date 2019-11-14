<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePronosticsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronostics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('team_1');
            $table->string('team_2');
            $table->string('team_win');
            $table->string("start_date");
            $table->integer('fiability');
            $table->string('analyse')->nullable();
            $table->tinyInteger('bet_won_or_not')->default(2);
            $table->float("bet")->default(1.00);
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
        Schema::dropIfExists('pronostics');
    }
}
