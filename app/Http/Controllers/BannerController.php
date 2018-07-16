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
            $imagem = UploadController::UploadImage($file, 'uploads/banner/', 700);
            $resposta->imagem = $imagem;
        endif;
        
        $resposta->tamanho = $request->input('tamanho');        
        $resposta->save();
        
        return compact('resposta');
    }
    
    // FUNÇÕES SITE
    
    public function listarBanner() {
        $resposta = [
                    '600x100' => banner::where('tamanho', '=', '600x100')->orderByRaw("rand()")->get()->transform(function($item, $key){
                        return [
                            'imagem' => url('uploads/banner/' . $item->imagem)
                        ];
                    }),
                    '300x250' => banner::where('tamanho', '=', '300x250')->orderByRaw("rand()")->get()->transform(function($item, $key){
                        return [
                            'imagem' => url('uploads/banner/' . $item->imagem)
                        ];
                    }),
                    '300x350' => banner::where('tamanho', '=', '300x350')->orderByRaw("rand()")->get()->transform(function($item, $key){
                        return [
                            'imagem' => url('uploads/banner/' . $item->imagem)
                        ];
                    }),
                    '300x100' => banner::where('tamanho', '=', '300x100')->orderByRaw("rand()")->get()->transform(function($item, $key){
                        return [
                            'imagem' => url('uploads/banner/' . $item->imagem)
                        ];
                    })
                ];
        
        return compact('resposta');
    }
}
