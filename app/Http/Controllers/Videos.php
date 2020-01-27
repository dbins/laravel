<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Videos as VideosModel;

class Videos extends Controller
{
    public function index()
    {
        $resultados = VideosModel::listar();
        return view('layout.videos', ["resultados" => $resultados]);
    }
}
