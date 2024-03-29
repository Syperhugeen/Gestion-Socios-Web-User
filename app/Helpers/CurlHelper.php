<?php

namespace App\Helpers;

class CurlHelper
{

    /**
     * Peticióm GET usando Curl a una Url con o sin Headers- Retorna array con http info y data
     */
    public static function getUrlData(
        $url,
        $headers = []
    ) {

        $cliente = curl_init();
        curl_setopt($cliente, CURLOPT_URL, $url);
        curl_setopt($cliente, CURLOPT_HEADER, 0);
        if (count($headers) > 0) {
            curl_setopt($cliente, CURLOPT_HTTPHEADER, $headers);
        }

        curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);

        $contenido = json_decode(curl_exec($cliente));
        $httpcode  = curl_getinfo($cliente, CURLINFO_HTTP_CODE);
        curl_close($cliente);

        return [
            'Data'         => $contenido,
            'Https_status' => $httpcode,
        ];
    }

    public static function postUrlData(
        $url,
        $data,
        $headers = []
    ) {

        $cliente = curl_init();
        curl_setopt($cliente, CURLOPT_URL, $url);
        curl_setopt($cliente, CURLOPT_HEADER, 0);
        if (count($headers) > 0) {
            curl_setopt($cliente, CURLOPT_HTTPHEADER, $headers);
        }

        curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cliente, CURLOPT_POST, true);
        curl_setopt($cliente, CURLOPT_POSTFIELDS, $data);       

        $contenido = json_decode(curl_exec($cliente));
        $httpcode  = curl_getinfo($cliente, CURLINFO_HTTP_CODE);
        curl_close($cliente);

        return [
            'Data'         => $contenido,
            'Https_status' => $httpcode,
        ];
    }
}
