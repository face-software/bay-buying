<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (Auth::gaurd('supplier') OR Auth::gaurd('buyer') OR Auth::gaurd('manufacturer') OR Auth::gaurd('buying')) {
            if (! $request->expectsJson()) {
                return route('user.login');
            }
        } else {
            if (! $request->expectsJson()) {
                return route('login');
            }
        }
    }
}
