<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateGirlsTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        // Schema::create('girls', function (Blueprint $table) {

        //     $table->increments('id');

        //     $table->timestamps();
        //     //$table->softDeletes();

        // });
        Schema::table('girls', function (Blueprint $table) {
            $table->integer('votes');
            $table->String('ten');
            $table->decimal('Vong1');
            $table->decimal('Vong2');
            $table->decimal('Vong3');
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
