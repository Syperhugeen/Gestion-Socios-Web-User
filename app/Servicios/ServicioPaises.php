<?php

namespace App\Servicios;

use App\Helpers\CurlHelper;
use Illuminate\Support\Facades\Cache;

class ServicioPaises
{

    public static function getPaises()
    {
        $ip = strval($_SERVER['REMOTE_ADDR']);

        $header = [

            'Ip:' . $ip,
        ];

        $Paises = Cache::remember('PaisesApi', 6000, function () use ($header)
        {
            $Response = CurlHelper::getUrlData('https://app.gestionsocios.com.uy/get_paises', $header);

            return $Response['Https_status'] == '200' ? $Response['Data']->Paises : [];

        });

        return $Paises;

    }

}
