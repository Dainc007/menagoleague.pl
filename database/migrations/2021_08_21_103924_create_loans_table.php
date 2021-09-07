<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained();
            $table->unsignedBigInteger('old_team_id');
            $table->unsignedBigInteger('new_team_id');
            $table->unsignedBigInteger('loanFee')->nullable();
            $table->unsignedBigInteger('salary')->nullable();

            $table->boolean('buylaw');
            $table->unsignedBigInteger('transferFee')->nullable();

            $table->boolean('cancelLoan');
            $table->unsignedBigInteger('cancelFee')->nullable();

            $table->boolean('player_sign');
            $table->boolean('new_team_sign');
            $table->boolean('old_team_sign');

            $table->timestamps();

            $table->foreign('old_team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('new_team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
