<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HitungWaktuBelajar
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {

            $user = Auth::user();

            if (session()->has('last_activity')) {

                $last = Carbon::parse(session('last_activity'));
                $sekarang = now();

                $detik = $last->diffInSeconds($sekarang);

                $user->total_waktu += $detik;
                $user->save();
            }

            session(['last_activity' => now()]);
        }

        return $next($request);
    }
}