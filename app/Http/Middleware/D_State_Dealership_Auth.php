<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class D_State_Dealership_Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if ($user->usertype->usertype !== 'State Dealership' && $user->usertype->usertype !== 'Admin') {
            return redirect('/login')->withErrors(['access' => 'Unauthorized access. Please log in as an State Dealership.']);
        }
        return $next($request);
    }
}