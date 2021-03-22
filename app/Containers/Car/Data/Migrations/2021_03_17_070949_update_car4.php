<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateCar4 extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {

        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
