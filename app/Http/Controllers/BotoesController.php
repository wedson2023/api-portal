<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\botoes;
class BotoesController extends UploadController
{
    public function listar() {
        $registros = botoes::Paginate(8);
        return compact('registros');
    }
    
    public function deletar(Request $request){
        $resposta = botoes::find($request->input('id'));        
        if(!is_null($resposta->arquivo)):
            unlink('uploads/botoes/' . $resposta->arquivo);    
        endif; 
        
        $resposta = botoes::destroy($request->input('id'));
        return compact('resposta');
    }
    
    public function cadastro(Request $request) {
        $resposta = new botoes;
        
        if(isset($_FILES['arquivo'])):
            $file = $_FILES['arquivo']; 
            $arquivo = md5(time() . $file['name']) . '.pdf';
            move_uploaded_file($file['tmp_name'], 'uploads/botoes/' . $arquivo);
            $resposta->arquivo = $arquivo;
        endif;
        
        $resposta->nome = $request->input('nome');
        
        $resposta->save();
        
        return compact('resposta');
    }
}
