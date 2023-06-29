<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additions', function (Blueprint $table) {
            $table->id();
            $table->float('montant_total');
            $table->unsignedBigInteger('id_client')->nullable();
            $table->unsignedBigInteger('id_personnel');
            $table->timestamps();
            // Clés étrangères
            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_personnel')->references('id')->on('personnels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('additions');
    }
}
