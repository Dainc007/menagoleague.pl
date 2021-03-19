<?php

use App\Models\Message;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->string('title');
            $table->unsignedBigInteger('from');
            $table->unsignedBigInteger('to');
            $table->enum('status', Message::AVAILABLE_STATUSES)->default('sent');

            $table->foreign('from')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('to')->references('id')->on('users')->onDelete('CASCADE');
            

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
        Schema::dropIfExists('messages');
    }
}
