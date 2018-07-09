<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;
use App\guiaComercial;
use App\visitas;
use App\eventos;

class DashboardController extends Controller
{
    public function index(){
        
        $resposta = [        
            "count" => [
                'visitas' => visitas::count(),
                'noticias' => noticias::count(),
                'guia' => guiaComercial::count(),
                'eventos' => eventos::count()   
              ]
        ];
        
        return compact('resposta');
    }
}
