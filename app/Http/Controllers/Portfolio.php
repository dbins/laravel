<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Portfolio as PortfolioModel;

class Portfolio extends Controller
{
    public function index()
    {
        $resultados = PortfolioModel::listar();
        return view('layout.portfolio', ["resultados" => $resultados]);
    }
}
