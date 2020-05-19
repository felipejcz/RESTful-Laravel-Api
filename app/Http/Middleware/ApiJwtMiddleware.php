<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\JWTAuth;

class ApiJwtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            if(auth('api')->check())
            return $next($request);

            return response()->json(['status' => 'Authorization Token not found.']);
        } catch (\Exception $e) {

            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                 return response()->json(['status' => 'Token is Invalid.']);
            }else if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return response()->json(['status' => 'Token is Expired.']);
            }else if($e instanceof \Tymon\JWTAuth\Exceptions\TokenBlacklistedException){
                return response()->json(['status' => 'Token blacklisted or expired.']);
            }else{
                return response()->json(['status' => 'Authorization Token not found.']);
            }
        }
    }
}
