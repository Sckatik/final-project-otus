<?php

namespace App\Http\Middleware;
use App\Providers\RouteServiceProvider;
use App\Http\Middleware\Auth;

use Closure;

class UserVerify
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
        if (!$request->expectsJson()) {
            return route('login');
        }
        else{
            if (\Auth::user()->isUser()) {
                return redirect(RouteServiceProvider::HOME);
            } elseif (\Auth::user()->isAdmin() || \Auth::user()->isModerator()) {
                return redirect(RouteServiceProvider::ADMIN);
            }
        }

        return $next($request);
    }
}
