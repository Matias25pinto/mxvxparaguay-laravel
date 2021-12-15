<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_cat', function (Blueprint $table) {
            $table->id();
	    $table->foreignId('inscription_id')->references('id')->on('inscriptions');
	    $table->foreignId('categories_id')->references('id')->on('categories');
	    $table->integer('position')->default(0);
	    $table->integer('points')->default(0);
	    $table->boolean('absent')->default(false);
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
        Schema::dropIfExists('ins_cat');
    }
}
