<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Portfolio as PortfolioModel;

class Home extends Controller
{
    public function index()
    {
        $resultados = PortfolioModel::destaques();
        return view('layout.home', ["resultados" => $resultados]);
    }
}
