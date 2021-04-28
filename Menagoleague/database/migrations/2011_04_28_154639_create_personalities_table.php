<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalities', function (Blueprint $table) {
            $table->id();
            $table->integer('satisfaction')->default(rand(1, 100));
            $table->integer('greed')->default(rand(1, 100));
            $table->integer('ambitions')->default(rand(1, 100));
            $table->integer('fame')->default(rand(1, 100));
            $table->integer('leadership')->default(rand(1, 100));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personalities');
    }
}
