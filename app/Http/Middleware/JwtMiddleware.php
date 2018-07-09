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
        
        $bearer = $request->header('Authorization');
        
        if(is_null($bearer) || strlen($bearer)==0 || $bearer == 'Bearer null' || $bearer == 'Bearer true')
            return response('Token inválido', 401);
        
        return $next($request);
    }
}
