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
        schema::create('tb_informacion', function (Blueprint $table){
            $table->increments('id_informacion');
            $table->string('titulo', 50);
            $table->text('informacion')->nullable();
            $table->date('fi_publicacion');
            $table->date('ff_publicacion');
            $table->boolean('activo');
            $table->boolean('activobanner');
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
        schema::dropIfExists('tb_informacion');
    }
};
