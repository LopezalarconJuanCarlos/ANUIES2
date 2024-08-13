<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('tb_archivos', function (Blueprint $table){
            $table->increments('id_archivos');
            $table->text('nombre');
            $table->text('archivo')->nullable();
            $table->integer('id_informacion');
            $table->text('detalle');
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
        schema::dropIfExists('tb_archivos');
    }
};
