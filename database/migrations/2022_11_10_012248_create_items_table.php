<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->foreignId('item_game_id')->constrained('games','game_id');
            // $table->integer('item_correct_answer');
            $table->foreignId('item_tq_id')->constrained('types_question','tq_id');
            $table->text('item_question');
            $table->integer('item_time');
            $table->boolean('item_used')->default(false);
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
        Schema::dropIfExists('items');
    }
};
