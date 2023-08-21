<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class UserAuthentication
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
		if(isset(Auth::user()->id)){
			if(Session::get('loggedData')){
				return $next($request);
			}
		}else{
			return redirect('/');
		}
        
    }
	
}
