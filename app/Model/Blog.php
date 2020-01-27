<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $connection = "sqlite";
    protected $table = "blog";

    public static function listar()
    {
        $sql = self::select(["id", "titulo", "categoria", "descricao", "imagem", "link"])->orderBy("id", "asc");
        return $sql->get();
    }
}
