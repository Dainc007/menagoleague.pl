<?php

use App\Models\Transfer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained();
            $table->unsignedBigInteger('from')->nullable();
            $table->unsignedBigInteger('to')->nullable();
            $table->unsignedBigInteger('fee')->nullable();
            $table->enum('status', Transfer::AVAILABLE_STATUSES)->default('in_progress');

            $table->boolean('player_sign');
            $table->boolean('new_team_sign');
            $table->boolean('old_team_sign');
            $table->timestamps();

            $table->foreign('from')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('to')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
