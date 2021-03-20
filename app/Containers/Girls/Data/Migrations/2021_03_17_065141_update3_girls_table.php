<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Update3GirlsTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('girls', function (Blueprint $table) {

            $table->dropColumn('Vong4');

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
