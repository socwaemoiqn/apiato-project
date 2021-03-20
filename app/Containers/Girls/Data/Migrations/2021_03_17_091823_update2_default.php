<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Update2Default extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('girls', function (Blueprint $table) {
            $table->integer('votes')->nullable() -> change();
            
            $table->decimal('Vong1')->nullable() -> change();
            $table->decimal('Vong2')->nullable() -> change();
            $table->decimal('Vong3')->nullable() -> change();

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
