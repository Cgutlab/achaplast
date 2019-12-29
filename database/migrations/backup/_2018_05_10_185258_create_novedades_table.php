<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedades', function (Blueprint $table) {

            $table->increments('id');
            $table->text('imagen');
            $table->text('titulo');
            $table->text('breve');
            $table->text('resena');
            $table->text('descripcion');
            $table->text('fecha');
            $table->text('orden');
            $table->text('pdf')->nullable();
            $table->text('id_categoria');
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
        Schema::dropIfExists('novedades');
    }
}
