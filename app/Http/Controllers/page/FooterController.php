<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    public function getFooter() {
        
        $url = file_get_contents('http://pox.globo.com/rss/g1/');
        $resposta = simplexml_load_string($url)->channel;        
        return compact('resposta');
    }
}
