 <?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Support\Facades\Auth;

    class RedirectIfAuthenticated
    {
        public function handle($request, Closure $next, $guard = null)
        {
            if ($guard == "member" && Auth::guard($guard)->check()) {
                return redirect('/dashboard');
            }
            
            if (Auth::guard($guard)->check()) {
                return redirect('/dashboard');
            }

            return $next($request);
        }
    }