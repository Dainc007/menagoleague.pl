<?php

use App\Models\Player;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->enum('device', User::AVAILABLE_DEVICES);
            $table->string('name');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->string('nationality');
            $table->integer('wage')->default(Player::WAGE);
            $table->integer('contract_lenght')->default(0);
            $table->string('position');
            $table->integer('overall');
            $table->integer('age');
            $table->string('real_team');
            
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('teams')->onDelete('CASCADE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
