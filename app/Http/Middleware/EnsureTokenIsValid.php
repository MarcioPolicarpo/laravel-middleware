<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
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
        // Getting token from request header
        // if ($request->header('token') !== "MySecret")
        // {
        //     $message = [
        //         'errorCode' => -1,
        //         'message' => 'That is an invalid token',
        //         'timestamp' => now()];
        //     return response($message, 401);
        // }

        // Getting token from request URI
        // if ($request->token !== "MySecret")
        // {
        //     $message = [
        //         'errorCode' => -1,
        //         'message' => 'That is an invalid token',
        //         'timestamp' => now()];
        //     return response($message, 401);
        // }

        return $next($request);
    }
}
