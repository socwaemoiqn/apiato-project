<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateDefault extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('girls', function (Blueprint $table) {
            $table->string('ten') -> unique()-> change();
           

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
