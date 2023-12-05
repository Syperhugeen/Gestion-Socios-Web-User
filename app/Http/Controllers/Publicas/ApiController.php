<?php

namespace App\Http\Controllers\Publicas;

use App\Helpers\HelpersGenerales;
use App\Http\Controllers\Controller;
use App\Servicios\ServiciosAccessDevices;

class ApiController extends Controller
{

    public function getAccessDevices()
    {

        $data = ServiciosAccessDevices::getDevices();
        return HelpersGenerales::formateResponseToVue(true, 'Se cargaron los datos', $data);
    }

}
