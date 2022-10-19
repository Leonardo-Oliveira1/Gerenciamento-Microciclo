<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class IsUserAccepted
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

        if(Auth::user()->account_type == "Not Accepted"){
            return redirect()->route('login')
            ->with('error','Sua conta ainda não foi aprovada por um administrador do sistema.');
        }

        return $next($request);
    }
}
