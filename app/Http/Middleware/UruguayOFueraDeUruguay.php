<?php

namespace App\Http\Middleware;

use App\Helpers\CurlHelper;
use Closure;
use Illuminate\Support\Facades\Session;

class UruguayOFueraDeUruguay
{

    public function handle($request, Closure $next)
    {

        if (!Session::has('esDeUruguay')) {

            $ip_del_user = strval($_SERVER['REMOTE_ADDR']);
            $Response    = CurlHelper::getUrlData("http://www.geoplugin.net/json.gp?ip=" . $ip_del_user);
            $Valor       = true;

            if ($Response['Https_status'] == 200) {
                $Response = $Response['Data'];
                if ($Response->geoplugin_status == 200) {
                    $Valor = $Response->geoplugin_countryCode == 'UY' ? true : false;
                }
            }

            Session::put('esDeUruguay', $Valor);

        }

        return $next($request);
    }
}
