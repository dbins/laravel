<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $connection = "sqlite";
    protected $table = "videos";

    public static function listar()
    {
        $sql = self::select(["id", "titulo", "categoria", "descricao", "imagem", "link"])->orderBy("id", "asc");
        return $sql->get();
    }
}
