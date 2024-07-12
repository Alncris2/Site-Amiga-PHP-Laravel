<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('tipo_id')->references('id')->on('Tipos');
            $table->string('titulo');
            $table->string('descrição');
            $table->string('texto');
            $table->string('paragrafo2')->nullable();
            $table->string('imagem')->default('public/lib/img/amiga2.jpeg');
            $table->string('imagemseg')->nullable();
            $table->bigInteger('visualizacoes')->default(0);
            $table->enum('publicar',['sim','nao'])->default('nao');
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
        Schema::dropIfExists('guias');
    }
}
