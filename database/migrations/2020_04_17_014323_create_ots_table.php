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
            $table->string('tiporeparacion')->nullable();
            $table->integer('user_id');
            $table->datetime('fechaingreso');
            $table->string('detalles')->nullable();
            $table->string('sintoma')->nullable();
            $table->string('diagnostico')->nullable();
            $table->string('presupuesto')->nullable();
            $table->date('fechaentrega')->nullable();
            $table->integer('estado_id');
            $table->integer('area_id')->nullable();
            $table->integer('cliente_id');
            $table->integer('equipo_id');
            $table->integer('anotaciones_id')->nullable();
            $table->string('recibidopor_id')->nullable();
            $table->string('passwordot');
            $table->integer('estadorepuesto_id')->default(1);
            $table->string('descrapida')->nullable();
            $table->integer('confirmacion_id')->nullable();
            $table->integer('reparaexito_id')->default(1);
            $table->integer('categoria_id')->default(1);
            $table->integer('sucursal_id');
            $table->integer('repuesto_id')->nullable();
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
