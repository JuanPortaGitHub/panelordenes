<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annotations', function (Blueprint $table) {
            $table->id();
            $table->integer('ot_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('cliente_id')->nullable();
            $table->text('anotacion')->nullable();
            $table->boolean('visiblecliente')->nullable()->default(1);
            $table->boolean('interaccioncliente')->nullable()->default(0);
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
        Schema::dropIfExists('annotations');
    }
}
