<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $connection = "sqlite";
    protected $table = "contatos";
	
	public static function cadastrar (String $nome, String $email, String $telefone, String $mensagem){
        //DB::enableQueryLog();
        $sql = self::insert([
            "nome" => $nome,
            "email" => $email,
            "telefone" => $telefone,
			"mensagem" => $mensagem
        ]);
        //dd(DB::getQueryLog());
        //dd($sql->toSql());
    }
}
