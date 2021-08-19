<?php

use App\Models\Finance;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained();
            $table->enum('type', Finance::AVAILABLE_TYPES);
            $table->string('title', 255);
            $table->bigInteger('money_before');
            $table->bigInteger('price');
            $table->bigInteger('money_after');
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
        Schema::dropIfExists('finances');
    }
}
