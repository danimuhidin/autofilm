<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan Auth di-import
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek jika user sudah login DAN user->is_admin == true
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request); // Lanjutkan ke halaman admin
        }

        // Jika bukan admin, tendang ke halaman home
        return redirect('/home');
    }
}