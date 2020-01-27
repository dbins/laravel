<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaPortfolio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 80);
            $table->string('categoria', 80);
            $table->string('tipo', 80)->nullable();;
            $table->integer('ano')->nullable();;
            $table->string('imagem', 80);
            $table->string('banco_dados', 80)->nullable();;
            $table->string('descricao', 80)->nullable();;
            $table->string('link', 200)->nullable();;
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
        Schema::dropIfExists('portfolio');
    }
}
