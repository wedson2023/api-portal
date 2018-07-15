<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorias;

class CategoriasController extends Controller
{
    public function listar() {
        $resposta = categorias::all();
        return compact('resposta');
    }
    
    
}
