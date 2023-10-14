<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('login');
    //     }
    // }
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (Auth::check()) {
                $user = Auth::user();

                if ($user->role == 'Admin') {
                    return route('admin'); // Ganti dengan rute dashboard admin
                } elseif ($user->role == 'Teacher') {
                    return route('teacher'); // Ganti dengan rute dashboard guru
                } elseif ($user->role == 'Student') {
                    return route('student'); // Ganti dengan rute dashboard siswa
                }
            }
        }
    }
}
