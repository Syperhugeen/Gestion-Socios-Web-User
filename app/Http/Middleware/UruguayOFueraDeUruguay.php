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
        $ipDelUser = $_SERVER['REMOTE_ADDR']; 

        
        $geoData = null;
        if (!Session::has('esDeUruguay') || !Session::has('pais')) {
            $geoData = $this->getGeoDataFromIp($ipDelUser);
        }

        /**
         * -----------------------------------
         *  esDeUruguay
         * -----------------------------------
         */
        if (!Session::has('esDeUruguay')) {
            $esDeUruguay = false;

            if ($geoData && isset($geoData->countryCode)) {
                $esDeUruguay = $geoData->countryCode === 'UY';
            }

            Session::put('esDeUruguay', $esDeUruguay);
        }

        /**
         * -----------------------------------
         *  pais
         * -----------------------------------
         */
        if (!Session::has('pais')) {
            $paises = collect(ServicioPaises::getPaises());

            // País por defecto (ajustá 'US' si querés que Uruguay sea el default)
            $paisPorDefecto = $paises->firstWhere('code', 'US');

            $paisSeleccionado = $paisPorDefecto;

            if ($geoData && isset($geoData->countryCode)) {
                $pais = $paises->firstWhere('code', $geoData->countryCode);
                if ($pais) {
                    $paisSeleccionado = $pais;
                }
            }

            Session::put('pais', $paisSeleccionado);
        }

        return $next($request);
    }

    /**
     * Llama a la API de ip-api.com y devuelve el objeto de datos
     * o null si algo falla.
     */
    protected function getGeoDataFromIp(?string $ip)
    {
        if (empty($ip)) {
            return null;
        }

        // Ignorar IPs locales (útil en desarrollo)
        if (in_array($ip, ['127.0.0.1', '::1'])) {
            return null;
        }

        $response = CurlHelper::getUrlData("http://ip-api.com/json/" . $ip);

        // Asumo que CurlHelper devuelve algo como:
        // ['Https_status' => 200, 'Data' => (object)]
        if (!isset($response['Https_status']) || $response['Https_status'] !== 200) {
            return null;
        }

        $data = $response['Data'] ?? null;

        if (!is_object($data)) {
            return null;
        }

        // ip-api usa: status = "success" | "fail"
        if (($data->status ?? null) !== 'success') {
            return null;
        }

        return $data;
    }
}
