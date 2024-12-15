<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        dd('Middleware bekerja1');
        // Cek apakah user sudah login dan memiliki role admin
        // if (Auth::check() && Auth::user()->role === 'admin') {
        //     return $next($request);
        // }

        if ($request->session()->has('admin_logged_in')) {
            return $next($request);
        }

        // Jika bukan admin, redirect ke halaman login atau error
        return redirect('admin.login')->with('error', 'You do not have admin access.');
    }
}
