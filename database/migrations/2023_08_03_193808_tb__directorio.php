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
        schema::create('tb_directorio', function (Blueprint $table){
            $table->increments('id_directorio');
            $table->string('puesto', 50);
            $table->string('nombre', 50);
            $table->string('app', 50);
            $table->string('apm', 50);
            $table->string('institucion', 50);
            $table->text('telefono');
            $table->text('email');
            $table->boolean('activo');
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
        schema::dropIfExists('tb_directorio');

    }
};
