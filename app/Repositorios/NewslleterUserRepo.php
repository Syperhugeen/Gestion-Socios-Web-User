<?php

namespace App\Repositorios;

use App\Entidades\NewslleterUser;

class NewslleterUserRepo extends BaseRepo
{

    public function getEntidad()
    {
        return new NewslleterUser();
    }

    public function crearNuevoUserNewslleter($email)
    {
        $Entidades = $this->getEntidad()->where('email', $email)->get();

        if ($Entidades->count() > 0)
        {
            $Entidad                  = $Entidades->first();
            $Entidad->se_puede_enviar = 'si';
            $Entidad->save();
        }
        else
        {
            $Entidad                  = $this->getEntidad();
            $Entidad->se_puede_enviar = 'si';
            $Entidad->email           = $email;
            $Entidad->save();
        }

        return $Entidad;
    }

}
