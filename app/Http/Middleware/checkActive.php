<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class checkActive
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
        
        
            
            if (Auth::check()) 
            {
            if (Auth::user()->status == '1') {
                 return $next($request);
            }elseif (Auth::user()->status != '1') {
                Auth::logout();
               return redirect()->to('admin/login')->withErrors(['login'=>'Tài khoản của bạn đang bị khóa']);
            } 
           
        }else {
            return redirect()->to('admin/login');
        }
           
        }

    }

