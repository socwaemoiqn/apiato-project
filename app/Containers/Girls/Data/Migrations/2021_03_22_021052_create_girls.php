<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGirls extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('girls', function (Blueprint $table) {
            $table->integer('votes')->nullable();
            $table->String('ten')-> unique();
            $table->decimal('Vong1')->nullable();
            $table->decimal('Vong2')->nullable();
            $table->decimal('Vong3')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('girls');
    }
}
