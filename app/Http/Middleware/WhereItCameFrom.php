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
        $fbclid = $request->query('fbclid');
        $gclid  = $request->query('gclid');
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

        if ($fbclid) {
            if (!Session::has('fbclid') || Session::get('fbclid') != $fbclid) {
                Session::put('fbclid', $fbclid);
            }

            if ($isFrom == 'organic') {
                Session::put('isFrom', 'metaAds');
            }
        }

        if ($gclid) {
            if (!Session::has('gclid') || Session::get('gclid') != $gclid) {
                Session::put('gclid', $gclid);
            }

            if ($isFrom == 'organic') {
                Session::put('isFrom', 'googleAds');
            }
        }

        return $next($request);
    }
}
