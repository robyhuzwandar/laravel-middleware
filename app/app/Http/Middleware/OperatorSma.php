<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class OperatorSma
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
        if(Auth::user()->role == 'operator_sma'){
            return $next($request);
        }else{
            return redirect()->back();
        }
    }
}
