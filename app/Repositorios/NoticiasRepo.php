<?php 

namespace App\Repositorios;

use App\Entidades\Noticia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

/**
* Repositorio de consultas a la base de datos User
*/
class NoticiasRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Noticia();
  }

  //guetters/////////////////////////////////////////////////////////////////////


  public function getUltimosBlogs()
  {
    return Cache::remember('UltimosBlogs', 500, function() {
                              return $this->getEntidadesActivasOrdendasSegunYCantidad( 'id', 'desc', 3); 
                          }); 
  }

 /**
  *  Le paso un blog y busco otros similares
  */
  public function getBlogsRelacionados($Blog, $Cantidad = 6)
  {
    $Blogs = $this->getEntidad()
                  ->Active()
                  ->where('id','<>',$Blog->id)
                  ->where(function($q) use ($Blog)
                       {   
                          if($Blog->tags != null)    
                          {
                            $Tags = explode(',',trim($Blog->tags));                            

                            if(count($Tags) == 0)
                            {
                               $q->where('tags', "LIKE","%".trim($Tags)."%"); 
                            } 
                            else
                            {
                              // H a g o   e l   w h e r e   d e l   p r i m e r o  
                              $q->where('tags', "LIKE","%".trim($Tags[0])."%"); 

                              // Q u i t o   e l   e l e m e n t o
                              unset($Tags[0]);
                              
                              foreach($Tags as $Tag)
                              { 
                                if($Tag != '')
                                {
                                  $q->orWhere('tags', "LIKE","%".trim($Tag)."%");
                                  $q->orWhere('name', "LIKE","%".trim($Tag)."%");
                                }                                
                              }
                            } 
                            
                          }      
                       })
                  ->orderBy('id','desc')
                  ->limit($Cantidad)
                  ->get();

                  return $Blogs;
  }


  /**
   * Me devuelve entidades relacionadas con este valor
   *
   * @param puede ser string o array con varios strings
   *
   * @return array de entidades
   */
  public function getBlogsRelacionadosConEsteValor($String_oarray)
  {
    $Blogs = $this->getEntidad()
                  ->Active()
                  ->where(function($q) use ($String_oarray) { 
                            if(is_array($String_oarray))
                            {
                              // H a g o   e l   w h e r e   d e l   p r i m e r o  
                              $q->where('tags', "LIKE","%".trim($String_oarray[0])."%"); 
                              $q->orWhere('name', "LIKE","%".trim($String_oarray[0])."%");
                              // Q u i t o   e l   e l e m e n t o
                              unset($String_oarray[0]);
                              
                              foreach($String_oarray as $Valor)
                              { 
                                $q->orWhere('tags', "LIKE","%".trim($Valor)."%");
                                $q->orWhere('name', "LIKE","%".trim($Valor)."%");
                              }
                            }
                            else
                            {
                              $Valor = trim($String_oarray);
                              $q->where('name', "LIKE","%".$Valor."%"); 
                              $q->orWhere('tags', "LIKE","%".$Valor."%");
                            }

                            
                       })
                  ->orderBy('id','desc')
                  ->get();

    return $Blogs;

  }

  //setters//////////////////////////////////////////////////////////////////////

  


  
}