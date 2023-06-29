<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefreshementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refreshements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->boolean('menu_jour_activated')->default(0);
            $table->unsignedBigInteger('id_personnel');
            $table->unsignedBigInteger('id_tva')->nullable();
            $table->timestamps();
            // Clés étrangères
            $table->foreign('id_personnel')->references('id')->on('personnels');
            $table->foreign('id_tva')->references('id')->on('tvas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refreshements');
    }
}
