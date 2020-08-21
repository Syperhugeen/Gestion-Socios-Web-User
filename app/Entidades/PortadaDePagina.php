<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Traits\entidadesMetodosComunes;
use App\Traits\entidadesTagsTitleMetodos;
use App\Traits\entidadesMetodosDeImagenes;

class PortadaDePagina extends Model
{

    use entidadesMetodosComunes;
    use entidadesTagsTitleMetodos;
    use entidadesMetodosDeImagenes;

    protected $table            ='portada_de_paginas';    
    protected $fillable         = ['name', 'description'];
    protected $img_key          = 'portada_de_pagina_id';
    protected $route_admin_name = 'get_admin_portadas_de_paginas_editar';
    



    // A t r i b u t o s   m u t a d o s
   
    
    

    
    

   

   
    
    
}