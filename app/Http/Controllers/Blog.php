<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Blog as BlogModel;

class Blog extends Controller
{
    public function index()
    {
        $resultados = BlogModel::listar();
        return view('layout.blog', ["resultados" => $resultados]);
    }
}
