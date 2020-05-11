<?php

namespace estoque\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AutorizacaoMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   //** varifica se o usuario pode acessar aquela pagina */
        if(Auth::guest()){
            return redirect('/auth/login');
        }
        return $next($request);
    }
}
