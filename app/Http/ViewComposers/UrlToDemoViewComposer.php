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

        $urlToDemo = 'https://app.gestionsocios.com.uy/comenzar-a-probar-gratis';

        $isFrom = Session::has('isFrom') ? Session::get('isFrom') : 'organic';

        $origin = url("/");
        $origin = str_replace(['http://', 'https://'], '', $origin);

        $params = http_build_query(['organicOrPay' => $isFrom, 'lang' => 'es', 'origin' => $origin]);

        $urlToDemo = $urlToDemo . '?' . $params;

        $view->with(compact('urlToDemo'));

    }

}
