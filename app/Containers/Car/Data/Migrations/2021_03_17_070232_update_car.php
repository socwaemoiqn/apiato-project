<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateCar extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('update', function (Blueprint $table) {

            $table->integer('votes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('update');
    }
}
