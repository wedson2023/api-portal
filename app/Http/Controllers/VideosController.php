<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videos;

class VideosController extends Controller
{
    public function cadastro(Request $request){
            
        $resposta = new Videos;
        $resposta->link = $request->input('link');        
        $resposta->titulo = $request->input('titulo');        
        $resposta->descricao = $request->input('descricao');        
        $resposta->save();
        
        return compact('resposta');
    }
}
