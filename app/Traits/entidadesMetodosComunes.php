<?php

namespace App\Traits;


trait entidadesMetodosComunes{


     public function getRouteAdminAttribute()
     {

        if(isset($this->route_admin_name))
        {
          return route($this->route_admin_name,$this->id);
        }
        else
        {
          return null;
        }
        
     }


    /* S c o p e s */

    public function scopeName($query, $name)
    {        
        if (trim($name) !="")
        {                        
           $query->where('name', "LIKE","%$name%"); 
        }        
    }

    public function scopeActive($query)
    {                               
        $query->where('estado', "si");                 
    }

}    