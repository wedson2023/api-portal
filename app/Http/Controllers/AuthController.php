<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Usuario;
use \Firebase\JWT\JWT;

class AuthController extends Controller
{    
    public function login(Request $request) { 
    
        $nome = $request->input('nome');
        $senha = $request->input('senha');

        $usuario = Usuario::where('nome', '=', $nome)->first();

        if(!$usuario || !Hash::check($senha, $usuario->senha)) 
            return response()->json(['resposta' => 'Usuário ou senha incorretos.'], 401);
        
        $key = 'portaldoguia';
        $param = [
            "iss" => "http://portaldoguia.com.br",
            "iat" => time(),
            "id" => $usuario->id
        ];
        
        $token = JWT::encode($param, $key);       
        
        return compact('token', 'usuario');
    }
    
    public function logOut() {
        Session::flush();
        return response()->json(['resposta' => true]);
    }
}
