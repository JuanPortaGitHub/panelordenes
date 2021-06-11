<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechafactura');
            $table->string('tipo');
            $table->string('nrolocalfactura');
            $table->string('numfactura');
            $table->double('cotizacionfactura',11,2);
            $table->integer('sucursalfactura');
            $table->integer('idcliente');
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
        Schema::dropIfExists('facturas');
    }
}
