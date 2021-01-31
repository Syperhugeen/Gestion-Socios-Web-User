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

        $Response = CurlHelper::getUrlData('https://apptest.gestionsocios.com.uy/get-planes-public', $header);

        dd($Response);
        return $Response['Https_status'] == '200' ? $Response['Data'] : [];

    }

}
