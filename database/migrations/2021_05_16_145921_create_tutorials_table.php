<?php

use App\Models\Tutorial;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('rival_id');
            $table->enum('status', Tutorial::AVAILABLE_STATUSES)->default('sent');
            $table->unique(['user_id', 'rival_id']);
            $table->string('message')->nullable();
            $table->string('full_time')->nullable();
            $table->string('half_time')->nullable();
            $table->string('fair_play')->nullable();


            $table->foreign('rival_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tutorials');
    }
}
