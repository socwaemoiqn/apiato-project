<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Udpate2 extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('fans', function (Blueprint $table) {

            $table->integer('votes')->nullable();
            $table->String('ten')-> unique();
            $table->decimal('tuoi')->nullable();
            $table->decimal('noi o')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('f');
    }
}
