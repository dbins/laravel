<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAplicativos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicativos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 80);
            $table->string('categoria', 80);
            $table->integer('ano');
            $table->string('imagem', 80);
            $table->string('tecnologia', 80);
            $table->string('descricao', 80);
            $table->string('link', 200);
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
        Schema::dropIfExists('aplicativos');
    }
}
