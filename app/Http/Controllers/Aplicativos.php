<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Aplicativos as AplicativosModel;

class Aplicativos extends Controller
{
    public function index()
    {
        $resultados = AplicativosModel::listar();
        return view('layout.aplicativos', ["resultados" => $resultados]);
    }
}
