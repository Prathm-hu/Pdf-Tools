<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Log;
use Carbon\Carbon;

class Blocked
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();

        $log = Log::where('ip', $ip)
            ->whereDate('created_at', Carbon::today())
            ->latest()
            ->first();

        if ($log && $log->status == 0) {
            return redirect()->route('blocked');
        }

        return $next($request);
    }
}
