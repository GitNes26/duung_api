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
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('game_id');
            $table->foreignId('game_user_id')->constrained('users','id');
            // $table->foreignId('game_subjet_id')->constrained('subjets','subjet_id');
            // $table->foreignId('game_difficult_id')->constrained('difficults','difficult_id');
            $table->foreignId('game_round_id')->constrained('rounds','round_id');
            $table->string('game_title');
            $table->string('game_description')->nullable();
            $table->integer('game_score')->default(0);
            $table->integer('game_rate')->default(0);
            $table->integer('game_quantity_items_correct')->default(0);
            // $table->integer('game_time_item')->nullable();
            $table->boolean('game_complete')->default(false);
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
        Schema::dropIfExists('games');
    }
};
