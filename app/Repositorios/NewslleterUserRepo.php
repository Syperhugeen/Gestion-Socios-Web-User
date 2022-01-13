<?php

namespace App\Repositorios;

use App\Entidades\NewslleterUser;

class NewslleterUserRepo extends BaseRepo
{

    public function getEntidad()
    {
        return new NewslleterUser();
    }

    public function getAllUserNewsletter()
    {
        return $this->getEntidad()->all();
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

    /**
     * Deja de enviar publicidad o artículos de blog.
     */
    public function changeUserToNotSend($email)
    {
        $userNewsletter = $this->getFirstEntidadSegunAtributo('email', $email);

        if ($userNewsletter != '')
        {
            $userNewsletter->se_puede_enviar = 'no';
            $userNewsletter->save();
        }
    }

    public function getUserAEnviar($id_blog)
    {

        return $this->getEntidad()->where('se_puede_enviar', 'si')->where('ultimo_blog_enviado_id', 'not like', '%' . $id_blog . '%')->get();
    }

}
