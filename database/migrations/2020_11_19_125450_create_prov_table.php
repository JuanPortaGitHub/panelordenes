<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prov', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cuit')->nullable();
            $table->integer('condicioniva')->nullable();;
            $table->string('razonsocial');
            $table->string('vendedor')->nullable();
            $table->integer('celular')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('mail')->nullable();
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
        Schema::dropIfExists('prov');
    }
}
