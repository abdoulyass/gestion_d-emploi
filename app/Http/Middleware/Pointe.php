<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Pointe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            if (session()->get('heure_pointage') === null) {
               session(['heure_pointage' => now()]);
               $data= session('heure_pointage');
                $user = Auth::user();
                $user->update(['name' =>$data]);
                $user->save();
            }
     
        }

        return $next($request);
    }
}
