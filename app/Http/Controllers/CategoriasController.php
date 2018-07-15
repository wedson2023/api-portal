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
    
    public function listarTodos() {
        $registros = categorias::Paginate(10);
        return compact('registros');
    }
    
    public function deletar(Request $request){        
        $resposta = categorias::destroy($request->input('id'));
        return compact('resposta');
    }
    
    public function cadastro(Request $request){
        
        $verifica = categorias::where('nome', '=', $request->input('nome'))->count();  
        if($verifica)   
            return response()->json(['resposta' => 'Já existe essa categorias.'], 401);
            
        $resposta = new categorias;
        $resposta->nome = $request->input('nome');        
        $resposta->save();
        
        return compact('resposta');
    }
    
}
