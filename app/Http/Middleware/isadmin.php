<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
class isadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {    if (Auth::check()) {
        if (Auth::user()->isAdmin()) {
            session::put('status','welcome admin');
            return $next($request);
        }

                          }
     Session::flash('failed', 'You do not have acces to admin page.');
    return redirect('/');
       }
}
