<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_values', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('expression_id')->nullable();
            $table->foreign('expression_id')->references('id')->on('character_expressions');

            $table->float('value', 10,8);

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
        Schema::dropIfExists('character_values');
    }
}
