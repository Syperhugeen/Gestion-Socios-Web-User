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

        $origin = $request->query('origin');
        $isFrom = '';

        switch ($origin) {
            case 'googleAds':
                $keyword = $request->query('keyword') ? $request->query('keyword') : null;
                $isFrom  = "googleAds : {$keyword}";
                break;
            case 'emailsASociosDelSistema':
                $isFrom = 'emailsASociosDelSistema';
                break;
            case 'blogs':
                $isFrom = 'blogs';
                break;
            default:
                $isFrom = $origin ? $origin : 'organic';
                break;
        }

        if (!Session::has('isFrom')) {
            Session::put('isFrom', $isFrom);
        }

        return $next($request);
    }
}
