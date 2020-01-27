<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aplicativos extends Model
{
    protected $connection = "sqlite";
    protected $table = "aplicativos";

    public static function listar()
    {
        $sql = self::select(["id", "titulo", "categoria", "descricao", "imagem", "link"])->orderBy("id", "asc");
        return $sql->get();
    }
}
