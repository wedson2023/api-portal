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

    public function cadastrar(Request $request){        
        $contato = new contato();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->estado = $request->input('estado');
        $contato->cidade = $request->input('cidade');
        $contato->mensagem = $request->input('mensagem');

        $resposta = $contato->save();

        return compact('resposta');
    }
}
