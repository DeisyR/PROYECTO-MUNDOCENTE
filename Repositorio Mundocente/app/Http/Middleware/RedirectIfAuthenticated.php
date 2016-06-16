<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch ($this->auth->user()->type_person) {
                case '1':
                    return redirect()->to('admin');
                    break;

                case '2':
                    return redirect()->to('docen');
                    break;


                case '3':
                    return redirect()->to('repre');
                    break;

                default:
                    return redirect()->to('login');
            }
            //return redirect()->to('admin');
            return redirect('/');
        }

        return $next($request);
    }
}
