<?php

use App\Models\Contract;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->enum('type', Contract::AVAILABLE_TYPES);
            $table->foreignId('team_id')->constrained();
            $table->foreignId('player_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->enum('status', CONTRACT::AVAILABLE_STATUSES);
            /* $table->foreignId('sponsor_id')->constrained(); */
            $table->timestamp('contract_sign_at');
            $table->timestamp('contract_last_extension');
            $table->timestamp('contract_expires');

            $table->unique(['type', 'status', 'team_id', 'player_id']);
            $table->unique(['type', 'status', 'team_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
