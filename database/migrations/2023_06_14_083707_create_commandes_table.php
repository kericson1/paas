<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('arrival_time');
            $table->integer('quantity')->default(1);
            $table->string('statut')->default('en attente');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_apero')->nullable();
            $table->unsignedBigInteger('id_plat')->nullable();
            $table->unsignedBigInteger('id_refreshment')->nullable();
            $table->timestamps();

             // Clés étrangères
             $table->foreign('id_client')->references('id')->on('clients');
             $table->foreign('id_apero')->references('id')->on('aperos');
             $table->foreign('id_plat')->references('id')->on('plats');
             $table->foreign('id_refreshment')->references('id')->on('refreshments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
