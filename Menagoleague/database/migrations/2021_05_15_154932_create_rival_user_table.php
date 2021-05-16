<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRivalUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rival_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('rival_id');
            $table->enum('status', USER::RIVAL_STATUSES);
            $table->unique(['user_id', 'rival_id']);

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
        Schema::dropIfExists('rival_user');
    }
}
