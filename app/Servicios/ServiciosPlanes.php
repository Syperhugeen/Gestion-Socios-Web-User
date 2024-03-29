<?php

namespace App\Servicios;

use App\Helpers\CurlHelper;
use Illuminate\Support\Facades\Cache;

class ServiciosPlanes
{

    public static function getPlanes()
    {
        $ip = strval($_SERVER['REMOTE_ADDR']);

        $header = [

            'Ip:' . $ip,
        ];

        $Planes = Cache::remember('PlanesApi', 6000, function () use ($header) {
            $Response = CurlHelper::getUrlData('https://app.gestionsocios.com.uy/api/comercial/getPlanesComercial', $header);

            return $Response['Https_status'] == '200' ? $Response['Data']->Data : [];

        });

        return $Planes;

    }

}
