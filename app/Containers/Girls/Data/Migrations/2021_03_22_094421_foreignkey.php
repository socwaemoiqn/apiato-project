<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Foreignkey extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('fans', function (Blueprint $table) {
            $table->foreign('girls_id')->references('id')->on('girls')
        ->onDelete('cascade')->change();

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
