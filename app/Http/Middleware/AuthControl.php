<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Helper\ControlHelper;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AuthControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
		
		
    if (!$request->session()->has('em')) {
        //
        return  redirect('login');
    }		
	
	return $next($request);	
		


    }

}
