<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends Controller
{
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json(['status' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function refresh(){
        return $this->respondWithToken(auth()->guard('api')->refresh(true,true));
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->guard('api')->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        try {
            auth()->guard('api')->logout();
            return response()->json(['status' => 'Successfully logged out']);
        } catch (\Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return response()->json(['status' => 'Token is Invalid.']);
           }else if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
               return response()->json(['status' => 'Token is Expired.']);
           }else if($e instanceof \Tymon\JWTAuth\Exceptions\TokenBlacklistedException){
               return response()->json(['status' => 'Token blacklisted or expired.']);
           }else{
               return response()->json(['status' => $e->getMessage()]);
           }
        }
        
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token, 
            'token_type' => 'bearer',
            'expires_in' => auth()->guard('api')->factory()->getTTL() * 60
        ]);
    }
}
