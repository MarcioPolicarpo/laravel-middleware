<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnsureDatabaseIsAvailable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try
        {
            DB::connection()->getPdo();
            return $next($request);
        }
        catch(Exception $e)
        {
            return response()->json([
                'errorCode' => $e->getCode(),
                'message' => 'Database is unavailable. Try again in a few minutes',
                'timestamp' => now()
            ]);
        }
    }
}
