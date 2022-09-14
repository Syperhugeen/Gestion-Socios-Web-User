<?php

namespace App\Http\Controllers\Cron;

use App\Helpers\HelpersGenerales;
use App\Http\Controllers\Controller;
use App\Repositorios\NewslleterUserRepo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class CronController extends Controller
{
    public function sendEmailInQueue()
    {

        $UserNewsletterRepo = new NewslleterUserRepo();

        $cacheKey = 'sendEmailInQueue';

        if (Cache::has($cacheKey)) {
            $emailDataColection = Cache::get($cacheKey);

            if ($emailDataColection->count() > 0) {
                for ($i = 1; $i < 200 && $emailDataColection->count() > 0; $i++) {
                    $data = $emailDataColection->shift();

                    $Blog           = $data->blog;
                    $UserNewsletter = $data->UserNewsletter;
                    $Email          = $UserNewsletter->email;

                    try {
                        Mail::send('emails.newslleter_blog',
                            compact('Blog', 'Email'),
                            function ($m) use ($Blog, $Email) {

                                $m->from('mauricio@gestionsocios.com.uy', 'Easysocio blog');

                                $m->to(trim($Email),
                                    $Email)->subject($Blog->name . ' 🚀');
                            }
                        );
                    } catch (\Exception $e) {

                        HelpersGenerales::log('error', 'emailNewsletter', $Email . ' -> ' . $e . ' -> ' . $e->getMessage());

                        if ($e->getMessage() == 'Swift_RfcComplianceException' || $e == 'Swift_RfcComplianceException') {
                            $UserNewsletterRepo->setAtributoEspecifico($UserNewsletter, 'se_puede_enviar', 'no');
                        }
                    }
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
