<?php

namespace App\Servicios;

use App\Helpers\CurlHelper;
use Illuminate\Support\Facades\Cache;

class ServiciosAccessDevices
{

    public static function getDevices()
    {
        $ip = strval($_SERVER['REMOTE_ADDR']);

        $header = [
            'Ip:' . $ip,
        ];

        $data = Cache::remember('DevicesApiCache', 6000, function () use ($header) {
            $Response = CurlHelper::getUrlData('https://app.gestionsocios.com.uy/api/comercial/getMolineteDevices', $header);

            return $Response['Https_status'] == '200' ?  $Response['Data']->Data : [];

        });

        return $data;

    }

}
