<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinUniversaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_universa', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('symbol');
            $table->integer('ranking');
            $table->string('price_btc');
            $table->string('price_usd');
            $table->string('volume');
            $table->string('percent_one_hour');
            $table->string('percent_twentyfour_hours');
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
        Schema::dropIfExists('coin_universa');
    }
}
