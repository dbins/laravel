<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $connection = "sqlite";
    protected $table = "portfolio";

    public static function listar()
    {
        $sql = self::select(["id", "titulo", "categoria","tipo","ano","imagem","banco_dados", "descricao", "link"])->orderBy("id", "asc");
        return $sql->get();
    }

    public static function destaques()
    {
        $sql = self::select(["id", "titulo", "categoria","tipo","ano","imagem","banco_dados", "descricao", "link"])->orderBy("id", "asc")->limit(3);
        return $sql->get();
    }
}
