<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Cek apakah admin sudah login
        if (!session()->has('admin_id')) {
            return redirect()->route('admin.login.form')->with('error', 'Harap login untuk mengakses halaman admin.');
        }

        return $next($request);


        
    }
    
}
