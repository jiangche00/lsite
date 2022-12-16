<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AccessLog
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
        $traceId = md5(time() . mt_rand(1, 1000000));
        $requestMessage = [
            'traceId' => $traceId,
            'url' => $request->url(),
            'method' => $request->method(),
            'ip' => $request->ips(),
            'headers' => $request->header('Authorization'),
            'params' => $request->all()
        ];
        Log::info("source=laravel request: ", $requestMessage);
        $respone = $next($request);
        $responeData = [
            'traceId' => $traceId,
            'respone' => json_decode($respone->getContent(), true) ?? ""
        ];
        Log::info("response: ", $responeData);
        return $respone;
    }
}
