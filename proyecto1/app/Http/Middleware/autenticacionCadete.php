<?php

namespace App\Http\Middleware;

use Closure;

class autenticacionCadete
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
        if($request->session()->has('idCadete') == true)
        {
            
        }
        else
        {
            return redirect('loginCadete');
        }       
        return $next($request);
    }
}
