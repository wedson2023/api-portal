<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\segmentos;

class HeaderController extends Controller
{
    public function getHeader() {
       $resposta = [ 
            'guiaMedico' => segmentos::select('id', 'nome')->where('categoria_id', '=', 1)->get(),
            'diskDelivery' => segmentos::select('id', 'nome')->where('categoria_id', '=', 2)->get(),
            'ondeHospedar' => segmentos::select('id', 'nome')->where('categoria_id', '=', 3)->get(),
            'ondeComer' => segmentos::select('id', 'nome')->where('categoria_id', '=', 4)->get(),
        ];
       
       return compact('resposta');
    }
}
