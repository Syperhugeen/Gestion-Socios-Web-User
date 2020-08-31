<?php

namespace App\Servicios;


use Illuminate\Support\Facades\Cache;
use \stdClass;




class ServiciosPlanes 
{

	public static function getPlanes()
	{
    $array = [];

		$Plan1 = new stdClass();
    $Plan1->name = 'Estandar';
    $Plan1->cantidad_de_socios = 150;
    $Plan1->cantidad_de_sucursales = 1;
    $Plan1->moneda = '$';
    $Plan1->precio = 990;		

    $Plan2 = new stdClass();
    $Plan2->name = 'Starter';
    $Plan2->cantidad_de_socios = 400;
    $Plan2->cantidad_de_sucursales = 1;
    $Plan2->moneda = '$';
    $Plan2->precio = 1490;   

    $Plan3 = new stdClass();
    $Plan3->name = 'Pro';
    $Plan3->cantidad_de_socios = 1200;
    $Plan3->cantidad_de_sucursales = 2;
    $Plan3->moneda = '$';
    $Plan3->precio = 1990;   

    array_push($array,$Plan1);
    array_push($array,$Plan2);
    array_push($array,$Plan3);

    return $array;
	}

}