<?php

use App\Models\Contract;
use App\Models\Player;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_team', function (Blueprint $table) {
            $table->foreignId('player_id')->constrained();
            $table->foreignId('team_id')->constrained();
            $table->integer('wage')->default(Player::WAGE);
            $table->unsignedBigInteger('signFee')->nullable();
            $table->enum('player_role', Player::AVAILABLE_ROLES);
            $table->enum('goals', Player::getAvailableGoals());
            $table->enum('status', Contract::AVAILABLE_STATUSES);

            $table->timestamp('contract_sign_at');
            $table->timestamp('contract_last_extension');
            $table->timestamp('contract_expires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_team');
    }
}
