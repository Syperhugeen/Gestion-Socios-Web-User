<?php

namespace App\Servicios;

use App\Helpers\CurlHelper;

class ServiciosPlanes
{

    public static function getPlanes()
    {
        $ip = strval($_SERVER['REMOTE_ADDR']);

        $header = [

            'Ip:' . $ip,
        ];

        $Planes = CurlHelper::getUrlData('https://apptest.gestionsocios.com.uy/get-planes-public', $header);

        dd($Planes);
        // Cache::remember('Planes', 600, function () use ($header) {

        // });

        return $Planes;
    }

}
