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
        Schema::create('rounds', function (Blueprint $table) {
            $table->bigIncrements('round_id');
            $table->string('round_name');
            $table->foreignId('round_subjet_id')->constrained('subjets','subjet_id');
            $table->foreignId('round_difficult_id')->constrained('difficults','difficult_id');
            $table->integer('round_quantity_items');
            $table->integer('round_correct_min');
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
        Schema::dropIfExists('rounds');
    }
};
