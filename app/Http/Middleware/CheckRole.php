<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {

        if (!Auth::check()) return redirect('login');

        $user = Auth::user();

        if ($user->hasRoles($roles)) return $next($request);


        return abort(403);
    }
}
