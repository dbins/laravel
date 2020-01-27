<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Model\Contatos as ContatosModel;
use App\Mail\SendEmail;

class Contato extends Controller
{
    public function index()
    {
        return view('layout.contato');
    }

    public function enviar(Request $request)
    {
		
		$request->validate(
            [
                "nome"=>"required",
                "email"=>"required|email",
                "telefone"=>"required",
				"mensagem"=>"required"

            ]
            );
		
        $nome = $request->input('nome');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $mensagem = $request->input('mensagem');
		ContatosModel::cadastrar($nome, $email, $telefone, $mensagem);
        Mail::to('bins.br@gmail.com')->send(new SendEmail($nome, $email, $telefone, $mensagem));
        return view('layout.contato_sucesso');
    }
}
