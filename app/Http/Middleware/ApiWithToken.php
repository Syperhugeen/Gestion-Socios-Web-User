<?php

namespace App\Http\Middleware;

use Closure;

class ApiWithToken
{

    public function handle(
                $request,
        Closure $next
    ) {
        $apiToken        = 'Bearer ' . config('app.tokenApi');
        $tokenToValidate = $request->header('Authorization');

        if ($tokenToValidate != $apiToken) {
            $errorMessage = "Token no valido";
            return response()->json(['error' => $errorMessage,
            ], 401);
        }

        return $next($request);
    }
}
