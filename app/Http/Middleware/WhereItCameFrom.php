<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class WhereItCameFrom
{

    public function handle(
                $request,
        Closure $next
    ) {

        $isFromGoogleAds = $request->query('origin') == 'googleAds' ? true : false;
        $keyword         = $request->query('keyword') ? $request->query('keyword') : null;

        if (!Session::has('isFrom')) {
            Session::put('isFrom', $isFromGoogleAds ? "googleAds : {$keyword}" : 'organic');
        }

        return $next($request);
    }
}
