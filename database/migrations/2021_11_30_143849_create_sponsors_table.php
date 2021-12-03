<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\League;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained();
            $table->foreignId('company_id')->constrained();
            $table->unsignedBigInteger('wage');
            $table->unsignedBigInteger('league_bonus')->nullable();
            $table->unsignedBigInteger('domestic_cup_bonus')->nullable();
            $table->unsignedBigInteger('international_cup_bonus')->nullable();
            $table->enum('league_goal', League::AVAILABLE_LEAGUE_GOALS);
            $table->enum('domestic_cup_goal', League::AVAILABLE_DOMESTIC_CUP_GOALS);
            $table->enum('international_cup_goal', League::AVAILABLE_INTERNATIONAL_CUP_GOALS);
            $table->dateTime('expiration date')->nullable();
            $table->boolean('is_signed')->default(false);
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
        Schema::dropIfExists('sponsors');
    }
}
