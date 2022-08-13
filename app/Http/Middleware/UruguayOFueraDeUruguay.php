<?php

namespace App\Http\Middleware;

use App\Helpers\CurlHelper;
use App\Servicios\ServicioPaises;
use Closure;
use Illuminate\Support\Facades\Session;

class UruguayOFueraDeUruguay
{

    public function handle(
        $request,
        Closure $next
    ) {

        /**
         * Ip del usuario
         */
        $ip_del_user = strval($_SERVER['REMOTE_ADDR']);

        

        if (!Session::has('esDeUruguay')) {
            $Response = CurlHelper::getUrlData("http://www.geoplugin.net/json.gp?ip=" . $ip_del_user);
            $Valor    = false;

            if ($Response['Https_status'] == 200) {
                $Response = $Response['Data'];
                if ($Response->geoplugin_status == 200) {
                    $Valor = $Response->geoplugin_countryCode == 'UY' ? true : false;
                }
            }

            Session::put('esDeUruguay', $Valor);
        }

        if (!Session::has('pais')) {
            $Response = CurlHelper::getUrlData("http://www.geoplugin.net/json.gp?ip=" . $ip_del_user);

            $Paises = collect(ServicioPaises::getPaises());

            $Pais = $Paises->filter(function ($pais) {
                return $pais->code == 'US';
            })->first();

            if ($Response['Https_status'] == 200) {
                $Response = $Response['Data'];
                if ($Response->geoplugin_status == 200) {
                    $Paises = $Paises->filter(function ($pais) use ($Response) {
                        return $pais->code == $Response->geoplugin_countryCode;
                    });

                    $Pais = $Paises->count() > 0 ? $Paises->first() : $Pais;
                }
            }

            Session::put('pais', $Pais);
        }

        return $next($request);
    }
}
