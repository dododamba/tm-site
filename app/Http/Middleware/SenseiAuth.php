<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class SenseiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$gard='web')
    {
        if(!Auth::guard($gard)->check()){
            return redirect()->route('main');
         }
        return $next($request);
    }
}
