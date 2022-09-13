<?php

namespace App\Http\Controllers\Cron;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class CronController extends Controller
{
    public function sendEmailInQueue()
    {

        $cacheKey = 'sendEmailInQueue';

        if (Cache::has($cacheKey)) {
            // Colección que almacena los datos de emails a enviar
            $emailDataColection = Cache::get($cacheKey);

            if ($emailDataColection->count() > 0) {
                for ($i = 1; $i < 200 && $emailDataColection->count() > 0; $i++) {
                    // Hago el envío dle email
                    // Quito de la colección
                }
            }

            if ($emailDataColection->count() === 0) {
                Cache::forget($cacheKey);
            } else {
                Cache::put($cacheKey, $emailDataColection);
            }
        }
    }
}
