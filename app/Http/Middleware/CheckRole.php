<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Memeriksa apakah pengguna terautentikasi dan memiliki peran yang diperlukan
        if ($request->user() && in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        // Jika pengguna tidak terautentikasi, arahkan ke halaman login
        if (!$request->user()) {
            return Redirect::route('login')->with('error', 'Silakan login untuk mengakses halaman ini.');
        }

        // Jika peran tidak sesuai, arahkan ke halaman sebelumnya
        return Redirect::back()->with('error', 'Access Denied. Kamu tidak memiliki akses ke halaman ini.');
    }
}
