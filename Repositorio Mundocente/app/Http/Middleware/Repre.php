<?php

namespace App\Http\Middleware;

use Closure;

class Repre
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
        switch($this->auth->user()->type_person){
            case '1':
                return redirect()->to('admin');
                break;

            case '2':
                return redirect()->to('docen');
                break;

            case '3':
                //return redirect()->to('repre');
                break;

            default:
                return redirect()->to('login');

        }
        return $next($request);
    }
}
