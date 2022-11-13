<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ordenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('precio_unidad', 10,2);
            $table->integer('cantidad');
            $table->decimal('descuento', 10,2);
            $table->unsignedBigInteger('orden_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('orden_id')->references('id')->on('ordenes');
            $table->foreign('producto_id')->references('id')->on('productos');
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
        Schema::dropIfExists('detalle_ordenes');
    }
}
