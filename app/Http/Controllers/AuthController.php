<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuario;
use \Firebase\JWT\JWT;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{    
    public function login(Request $request) { 
    
        $nome = $request->input('nome');
        $password = $request->input('password');

        $usuario = usuario::where('nome', '=', $nome)->first();

        if(!$usuario || !Hash::check($password, $usuario->password)) 
            return response()->json(['resposta' => 'Usuário ou senha incorretos.'], 401);
        
        $key = 'portaldoguia';
        $param = [
            "iss" => "http://portaldoguia.com.br",
            "iat" => time(),
            "id" => $usuario->id
        ];
        
        Auth::attempt(['nome' => $usuario->nome, 'password' => $password]);
        Auth::login($usuario);      
        
        $token = JWT::encode($param, $key);       
        
        return compact('token', 'usuario');
    }
    
//    public function validarSessao(){
//        $resposta = Auth::check();
//        return compact('resposta');                
//    }
    
    public function logOut() {
        //Auth::logout();
        $resposta = Auth::check();
        return compact('resposta');
    }
}
