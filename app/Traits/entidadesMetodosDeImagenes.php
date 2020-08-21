<?php

namespace App\Traits;
use App\Servicios\ServiciosDeEntidades;


trait entidadesMetodosDeImagenes{


  public function getImagenesAttribute()
    {
        return ServiciosDeEntidades::getImagenes($this->img_key,$this->id);
    }

    public function getImagenPrincipalAttribute()
    {
        return ServiciosDeEntidades::getFotoPrincipal($this->img_key,$this->id);
    }

     public function getUrlImgFotoPrincipalAttribute()
     {  
        if($this->imagen_principal->count() > 0)
        {
         return $this->imagen_principal->first()->url_img;
        }

        return url().'/imagenes/Helpers/imagen-no-disponible.png';
     }

     public function getUrlImgFotoPrincipalChicaAttribute()
     {
        if($this->imagen_principal->count() > 0)
        {   
          return $this->imagen_principal->first()->url_img_chica;
        }
        
        return url().'/imagenes/Helpers/imagen-no-disponible.png';        
     }


     public function getUrlImgFotoPrincipalVerticalAttribute()
     {  
        if($this->imagen_principal->count() > 0)
        {
          if($this->imagen_principal->first()->path_url_img_vertical == null)
          {
            return $this->url_img_foto_principal;
          }

          return $this->imagen_principal->first()->url_img_vertical;
        }

        return url().'/imagenes/Helpers/imagen-no-disponible.png';
     }

     public function getUrlImgFotoPrincipalVerticalChicaAttribute()
     {
        if($this->imagen_principal->count() > 0)
        {
           if($this->imagen_principal->first()->path_url_img_vertical_chica == null)
           {
             return $this->url_img_foto_principal_chica;
           }
           
           return $this->imagen_principal->first()->url_img_vertical_chica;
        }
        
        return url().'/imagenes/Helpers/imagen-no-disponible.png';        
     }


}
