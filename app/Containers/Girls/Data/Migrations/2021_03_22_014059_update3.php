<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Update3 extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('fans', function (Blueprint $table) {

            $table->dropColumn('noi o');
            $table->dropColumn('votes');

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
