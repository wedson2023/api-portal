<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class NoticiasController extends UploadController
{
    public function cadastro(Request $request){
        
        $file = $_FILES['capa'];        
        $capa = UploadController::UploadImage($file, 'uploads/noticias/', 300);
        $resposta = noticias::insert([
            'capa' => $capa,
            'fonte' => $request->input('fonte'),
            'titulo' => $request->input('titulo'),
            'subtitulo' => $request->input('subtitulo'),
            'destaque' => $request->input('destaque'),
            'ativo' => $request->input('ativo'),
            'template' => $request->input('template')
        ]);
        
        return compact('resposta');
    }
}
