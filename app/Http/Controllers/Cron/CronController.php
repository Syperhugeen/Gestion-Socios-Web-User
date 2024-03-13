<?php

namespace App\Http\Controllers\Cron;

use App\Http\Controllers\Controller;
use App\Servicios\ServicioApiSendEmail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class CronController extends Controller
{
    public function sendEmailInQueue()
    {

        $Now = Carbon::now();

        if ($Now->hour < 7 || $Now->hour > 22) {
            return "Fuera de hora para enviar";
        }

        $cacheKey = 'sendEmailInQueue';

        if (Cache::has($cacheKey)) {
            $emailDataColection = Cache::get($cacheKey);

            if ($emailDataColection->count() > 0) {
                for ($i = 1; $i < 50 && $emailDataColection->count() > 0; $i++) {
                    $data = $emailDataColection->shift();

                    $Blog           = $data->blog;
                    $UserNewsletter = $data->UserNewsletter;
                    $Email          = $UserNewsletter->email;

                    ServicioApiSendEmail::senBlogEmail($Blog, isset($UserNewsletter->name) ? $UserNewsletter->name : $Email, $Email);
                }
            }

            if ($emailDataColection->count() === 0) {
                Cache::forget($cacheKey);
                return "Se envío todo";
            } else {
                Cache::put($cacheKey, $emailDataColection, 2000);
                return sprintf('Quedan pendientes %d emails por enviar', Cache::get($cacheKey)->count());
            }
        }

        return "No hay nada para enviar";
    }
}
