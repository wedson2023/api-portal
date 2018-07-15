<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\segmentos;

class SegmentosController extends Controller
{
    public function listar() {
        $resposta = segmentos::all();
        return compact('resposta');
    }
    
    public function listarTodos() {
        $registros = segmentos::join('categorias', 'categorias.id', '=', 'segmentos.categoria_id')->select('segmentos.id', 'segmentos.nome', 'categorias.nome as categoria')->Paginate(10);
        return compact('registros');
    }
    
    public function deletar(Request $request){        
        $resposta = segmentos::destroy($request->input('id'));
        return compact('resposta');
    }
    
    public function cadastro(Request $request){
        
        $verifica = segmentos::where('nome', '=', $request->input('nome'))->count();  
        if($verifica)   
            return response()->json(['resposta' => 'Já existe esse segmento.'], 401);
            
        $resposta = new segmentos;
        $resposta->nome = $request->input('nome');        
        $resposta->categoria_id = $request->input('categoria_id');        
        $resposta->save();
        
        return compact('resposta');
    }
}
