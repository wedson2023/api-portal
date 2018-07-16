<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contato;
class ContatosController extends Controller
{
    public function listarTodos() {
        $registros = contato::Paginate(10);
        return compact('registros');
    }
    
    public function deletar(Request $request){        
        $resposta = contato::destroy($request->input('id'));
        return compact('resposta');
    }
}
