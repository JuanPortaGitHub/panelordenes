<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->id();
            $table->integer('idformapago');
            $table->integer('idfinanciaciontarjeta')->nullable();
            $table->integer('idcliente');
            $table->integer('idfactura')->nullable();
            $table->integer('lote')->nullable();
            $table->integer('autorizacion')->nullable();
            $table->string('detalles')->nullable();
            $table->double('monto',11,2)->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('recibos');
    }
}
