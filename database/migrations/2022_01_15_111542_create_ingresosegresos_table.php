<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosegresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresosegresos', function (Blueprint $table) {
            $table->id();
            $table->integer('nro');
            $table->string('tipo');
            $table->integer('sucursal_id')->nullable();
            $table->double('monto');
            $table->text('detalle')->nullable();
            $table->boolean('retiroarecibir')->default(false);
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
        Schema::dropIfExists('ingresosegresos');
    }
}
