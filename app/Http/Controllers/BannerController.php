<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\banner;

class BannerController extends UploadController
{
    public function listarTodos() {
        $registros = banner::Paginate(10);
        return compact('registros');
    }
    
    public function deletar(Request $request){
        $resposta = banner::find($request->input('id'));        
        if(!is_null($resposta->imagem)):
            unlink('uploads/banner/' . $resposta->imagem);    
        endif; 
        
        $resposta = banner::destroy($request->input('id'));
        return compact('resposta');
    }
    
    public function cadastro(Request $request){
        
        $resposta = new banner;
        
        if(isset($_FILES['imagem'])):
            $file = $_FILES['imagem']; 
            $imagem = UploadController::UploadImage($file, 'uploads/banner/', 300);
            $resposta->imagem = $imagem;
        endif;
        
        $resposta->tamanho = $request->input('tamanho');        
        $resposta->save();
        
        return compact('resposta');
    }
}
