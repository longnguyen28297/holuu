<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class Admin
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
            if (Auth::user()->isAdmin()) {
                 return $next($request);
            }else {
               return redirect()->to('admin')->withErrors('Bạn không có quyền truy cập');
            }
           
        }else {
            return redirect()->to('admin/login');
        }

        
    }
}
