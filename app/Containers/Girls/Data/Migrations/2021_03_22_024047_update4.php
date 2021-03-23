<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Update4 extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('fans', function (Blueprint $table) {

            $table->integer('girls_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('fans');
    }
}
