<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ot_id');
            $table->string('tiporeparacion');
            $table->integer('user_id');
            $table->datetime('fechaingreso');
            $table->string('detalles');
            $table->string('sintoma');
            $table->string('diagnostico');
            $table->string('presupuesto');
            $table->date('fechaentrega');
            $table->integer('estado_id');
            $table->integer('cliente_id');
            $table->integer('equipo_id');
            $table->integer('anotaciones_id');
            $table->integer('recibidopor_id');
            $table->string('passwordot');
            $table->integer('estadorepuesto_id')->default(1);
            $table->integer('confirmacion_id');
            $table->integer('reparaexito_id')->default(1);
            $table->integer('categoria_id')->default(1);
            $table->integer('sucursal_id');
            $table->boolean('repuesto');
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
        Schema::dropIfExists('ots');
    }
}
