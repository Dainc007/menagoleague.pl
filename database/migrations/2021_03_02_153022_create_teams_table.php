<?php

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id')->nullable()->unique();
            $table->unsignedBigInteger('league_id')->nullable();
            $table->unsignedBigInteger('device_id')->nullable();
            $table->unsignedBigInteger('transferBudget')->nullable();
            $table->unsignedBigInteger('value')->nullable();
            $table->boolean('is_active')->default(false);
            $table->unsignedBigInteger('sofifa_id');

            $table->unique(['name', 'device_id']);
            $table->unique(['sofifa_id', 'device_id']);
            $table->timestamps();

            $table->foreign('device_id')->references('id')->on('devices')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('league_id')->references('id')->on('leagues')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
