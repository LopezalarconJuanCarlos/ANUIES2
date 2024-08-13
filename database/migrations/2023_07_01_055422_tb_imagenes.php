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
        schema::create('tb_imagenes', function (Blueprint $table){
            $table->increments('id_imagen');
            $table->string('nombre');
            $table->text('foto')->nullable();
            $table->integer ('id_informacion');
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
        schema::dropIfExists('tb_imagenes');
    }
};
