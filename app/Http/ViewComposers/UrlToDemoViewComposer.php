<?php
namespace App\Http\ViewComposers;

use App\Repositorios\EmpresaRepo;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

class UrlToDemoViewComposer
{

    public function __construct(EmpresaRepo $EmpresaRepo) {}

    public function compose(View $view)
    {

        $baseUrl = 'https://app.gestionsocios.com.uy/es/comenzar-a-probar-gratis';

        $isFrom = Session::has('isFrom') ? Session::get('isFrom') : 'organic';
        $fbclid = Session::get('fbclid');
        $gclid  = Session::get('gclid');

        $origin = url("/");
        $origin = str_replace(['http://', 'https://'], '', $origin);

        $params = [
            'organicOrPay' => $isFrom,
            'lang'         => 'es',
            'origin'       => $origin,
        ];

        if ($fbclid) {
            $params['fbclid'] = $fbclid;
        }

        if ($gclid) {
            $params['gclid'] = $gclid;
        }

        $urlToDemo = $baseUrl . '?' . http_build_query($params);

        $view->with(compact('urlToDemo'));
    }
}
