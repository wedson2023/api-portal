<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class NoticiasController extends UploadController
{
    
    public function noticia($id){
        $resposta = noticias::find($id);
        return compact('resposta');
    }
    
    public function listar(Request $request) {
        $registros = noticias::Paginate(10);
        return compact('registros');
    }
    
    public function deletar(Request $request){
        
        $resposta = noticias::find($request->input('id'));        
        if(!is_null($resposta->capa)):
            unlink('uploads/noticias/' . $resposta->capa);    
        endif;        
        
        $resposta = noticias::destroy($request->input('id'));
        return compact('resposta');
    }
    
    public function editar(Request $request){
        
        $resposta = noticias::find($request->input('id'));
        
        if(isset($_FILES['capa'])):
            if(!is_null($resposta->capa)):
                unlink('uploads/noticias/' . $resposta->capa);    
            endif;
            $file = $_FILES['capa']; 
            $capa = UploadController::UploadImage($file, 'uploads/noticias/', 300);
            $resposta->capa = $capa;
        endif;
        
        $resposta = noticias::where('id', '=', $request->input('id'))->update([
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
