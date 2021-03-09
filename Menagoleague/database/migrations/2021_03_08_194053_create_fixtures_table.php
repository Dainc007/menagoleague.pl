<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competition_id');
            $table->unsignedBigInteger('host_id');
            $table->unsignedBigInteger('visitor_id');
            $table->integer('host_goals')->nullable();
            $table->integer('visitor_goals')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();

            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('CASCADE');
            $table->foreign('host_id')->references('id')->on('teams')->onDelete('CASCADE');
            $table->foreign('visitor_id')->references('id')->on('teams')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixtures');
    }
}

