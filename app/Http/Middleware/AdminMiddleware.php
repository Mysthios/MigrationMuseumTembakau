<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // dd('Middleware bekerja1');


        if ($request->session()->has('admin_logged_in')) {
            return $next($request);
        }

        // Jika bukan admin, redirect ke halaman login atau error
        return redirect('admin.login')->with('error', 'You do not have admin access.');
    }
}
