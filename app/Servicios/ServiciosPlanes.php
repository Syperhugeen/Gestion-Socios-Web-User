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

        $Planes = Cache::remember('Planes', 600, function () use ($header) {

            return CurlHelper::getUrlData('https://apptest.gestionsocios.com.uy/get-planes-public', $header);

        });

        return $Planes;
    }

}
