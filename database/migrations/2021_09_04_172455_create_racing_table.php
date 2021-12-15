<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racings', function (Blueprint $table) {
	   $table->id();
	    $table->foreignId('championship_id')->references('id')->on('championships');
	    $table->string('local');
	    $table->string('direccion');
	    $table->date('date');
	    $table->boolean('suspendido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('racings');
    }
}
