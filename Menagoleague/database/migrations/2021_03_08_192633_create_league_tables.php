<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competition_id');
            $table->timestamps();

            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('league_tables');
    }
}
