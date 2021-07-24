<?php

use App\Models\Personality;
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
            $table->foreignId('player_id')->constrained();
            $table->integer('greed')->default(rand(1, 100));
            $table->integer('ambitions')->default(rand(1, 100));
            $table->integer('fame')->default(rand(1, 100));
            $table->integer('leadership')->default(rand(1, 100));
            $table->integer('loyalty')->default(rand(1, 100));
            $table->enum('specialTrait', Personality::AVAILABLE_TRAITS);
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
