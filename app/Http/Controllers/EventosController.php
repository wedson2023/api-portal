<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eventos;
class EventosController extends UploadController
{
    public function evento($id){
        $resposta = eventos::find($id);
        return compact('resposta');
    }
    
    public function listar() {
        $registros = eventos::Paginate(10);
        return compact('registros');
    }
    
    public function deletar(Request $request){
        $resposta = eventos::find($request->input('id'));        
        if(!is_null($resposta->cartaz)):
            unlink('uploads/eventos/' . $resposta->cartaz);    
        endif; 
        
        $resposta = eventos::destroy($request->input('id'));
        return compact('resposta');
    }
    
    public function editar(Request $request){
        
        $resposta = eventos::find($request->input('id'));
        
        if(isset($_FILES['cartaz'])):
            if(!is_null($resposta->cartaz)):
                unlink('uploads/eventos/' . $resposta->cartaz);    
            endif;
            $file = $_FILES['cartaz']; 
            $cartaz = UploadController::UploadImage($file, 'uploads/eventos/', 700);
            $resposta->cartaz = $cartaz;
        endif;
        
        $resposta->nome = $request->input('nome');
        $resposta->local = $request->input('local');
        $resposta->data = $request->input('data');
        $resposta->template = $request->input('template');
        $resposta->site = $request->input('site');
        $resposta->categoria_id = $request->input('categoria_id'); 
        
        $resposta->save();
        
        return compact('resposta');
    }
    
    public function cadastro(Request $request){
        
        $resposta = new eventos;
        
        if(isset($_FILES['cartaz'])):
            $file = $_FILES['cartaz']; 
            $cartaz = UploadController::UploadImage($file, 'uploads/eventos/', 700);
            $resposta->cartaz = $cartaz;
        endif;
        
        $resposta->nome = $request->input('nome');
        $resposta->local = $request->input('local');
        $resposta->data = $request->input('data');
        $resposta->template = $request->input('template');
        $resposta->site = $request->input('site');
        $resposta->categoria_id = $request->input('categoria_id');
        
        $resposta->save();
        
        return compact('resposta');
    }
}
