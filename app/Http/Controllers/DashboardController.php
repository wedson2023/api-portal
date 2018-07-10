<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;
use App\guiaComercial;
use App\visitas;
use App\eventos;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        
        $now = Carbon::now();
        
        $mes = $now->month;
        $ano = $now->year;
        
        $trafego = visitas::whereMonth('created_at', '=', $mes)->whereYear('created_at', '=', $ano, 'or')->orderBy('created_at', 'ASC')->get()->groupBy(function($date){
            return Carbon::parse($date->created_at)->format('d');
        });
        
        $visitas = collect([]);
        foreach($trafego as $key => $val):
            $visitas[$key] = $val->count();
        endforeach;       
              
        $resposta = [        
            "count" => [
                'visitas' => visitas::count(),
                'noticias' => noticias::count(),
                'guia' => guiaComercial::count(),
                'eventos' => eventos::count()   
              ],
            "trafego" => [
                "dias" => $visitas->keys(),
                "visitas" => $visitas->values()
                ]
        ];        
        
        return compact('resposta');
    }
}
