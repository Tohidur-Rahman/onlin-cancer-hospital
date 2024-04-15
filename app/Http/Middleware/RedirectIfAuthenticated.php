<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if($guard === 'patient'){
                    return redirect(RouteServiceProvider::PATIENT_HOME);
                }
                return redirect()->route('patient.login');
            }
            if (Auth::guard($guard)->check()) {
                if($guard === 'doctor'){
                    return redirect(RouteServiceProvider::DOCTOR_HOME);
                }
                return redirect()->route('doctor.login');
            }
        }

        return $next($request);
    }
}
