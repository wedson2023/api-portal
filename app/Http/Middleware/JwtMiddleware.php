<?php

namespace App\Http\Middleware;
use \Firebase\JWT\JWT;
use Closure;

class JwtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$request->hasHeader('Authorization'))
            return response('Token não informado', 401);
        
        $token = $request->header('Authorization');
        
        if(is_null($token) || strlen($token) == 0 || $token == 'null' || $token == '')
            return response('Token inválido', 401);        
       
        try {
            $key = 'portaldoguia';
            $decoded = JWT::decode($token, $key, array('HS256'));
        } catch (\Exception $e) { 
            return compact('e');
        }
        
        return $next($request);
    }
}
