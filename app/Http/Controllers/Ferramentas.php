<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Ferramentas as FerramentasModel;

class Ferramentas extends Controller
{
    public function index()
    {
        $resultados = FerramentasModel::listar();
        return view('layout.ferramentas', ["resultados" => $resultados]);
    }
}
