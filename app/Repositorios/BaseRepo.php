<?php 
namespace App\Repositorios;


use Illuminate\Support\Facades\File;

use Intervention\Image\ImageManagerStatic as Image;


abstract class BaseRepo 
{
    
    protected $entidad;
    

    public function __construct()
    {      
      $this->entidad      = $this->getEntidad();
    }

    /**
     * funcion que va a hacer creada el los repo que extiendan.
     */
    abstract public function getEntidad();
  

    /**
     * Busca un registro por su id
     *
     * @return objet Entidad
     */
    public function find($id)
    {
      return $this->entidad->find($id);
    }
    
    /**
     * Me trae la primera entidad que exista según ese atributo. Si no existe devuelve string vacio
     *
     * @return objet or string "" sino existe
     */
    public function getFirstEntidadSegunAtributo($atributo,$valor)
    {
      $Entidades =  $this->getEntidad()
                         ->where($atributo,$valor)
                         ->get();

      if($Entidades->count() > 0)
      {
        return $Entidades[0];
      }     

      return '';              

    }   

    /**
     * Elimina la entidad
     * 
     * @return void
     */
    public function destruir_esta_entidad($Entidad)
    {
      $Entidad->delete();
    }

    /**
     * Entidades Activas ordenadas decreciente
     */
    public function getEntidadActivas()
    {
      return $this->entidad   
                  ->where('borrado','no')               
                  ->active()               
                  ->orderBy('id','desc')
                  ->get();
    }

   

    

    /**
     * Entidades Activas Paginadas y ordenadas
     */
    public function getEntidadActivasYOrdenadasSegunPaginadas($OrdenadasSegunAtributo,$Orden,$paginacion)
    {
      return $this->entidad
                  ->where('borrado','no')
                  ->active()               
                  ->orderBy($OrdenadasSegunAtributo,$Orden)
                  ->paginate($paginacion);
    }

    /**
     * Entidades All ya paginadas Paginadas.
     * Puede incluir algunas que no esten activas. 
     * Filtra las que no están borradas
     * Se usa para las entidades en Admin
     *
     * @return array Entidades
     *
     */
    public function getEntidadesAllPaginadas($request,$paginacion)
    {

      return $this->entidad
                  ->where('borrado','no')
                  ->name($request->get('name'))                
                  ->orderBy('id','desc')
                  ->paginate($paginacion);
  
    }    



    /**
     * Setea la entidad que los valor que vienen del request cuyas claves son las del array de propiedades
     *
     * @return Objeto de entidad
     */
    public function setEntidadDato($Entidad,$request,$Propiedades)
    {
        foreach ($Propiedades as $Propiedad) 
        {
          if($request->input($Propiedad) === null)
          {            
           
          }
          elseif($request->input($Propiedad) === '')
          {
            $Entidad->$Propiedad = $request->input($Propiedad);
          }
          else
          {
            $Entidad->$Propiedad = $request->input($Propiedad);
          }
         
        } 

        $Entidad->save();     

        return $Entidad;
    }

    /**
     * Setea una propiedad de la entidad ($atributo) con un valor ($valor)
     *
     * @return void 
     */
    public function setAtributoEspecifico($Entidad,$atributo,$valor)
    {
      if($valor != '')
      {
        $Entidad->$atributo = $valor;
        $Entidad->save();
      }
      
    }


    public function setImagen($Entidad,$request,$nombreDelCampoForm,$carpetaDelArchivo,$nombreDelArchivo,$ExtensionDelArchivo,$redimencionar_a = null)
    {
      if($request->hasFile($nombreDelCampoForm))
       {
         //obtenemos el campo file definido en el formulario
         $file = $request->file($nombreDelCampoForm);
         
         //nombre del Archico / Carpeta Incluido
         $nombre = $carpetaDelArchivo.$nombreDelArchivo.$ExtensionDelArchivo;
         

        if($redimencionar_a != null)
        {
            $imagen_insert = Image::make(File::get($file))->resize($redimencionar_a, null, function ($constraint) {
                                                                           $constraint->aspectRatio();
                                                                       })->save('imagenes/'.$nombre,70);
        }
        else
        {
           $imagen_insert = Image::make(File::get($file)); 
           $imagen_insert->save('imagenes/'.$nombre,70);   
        }

         //guardo_el_img
         if($Entidad != null)
         {
           try
           {
            $this->setAtributoEspecifico($Entidad,'img',$Entidad->name_slug);
           }
           catch (\Exception $e){}
           
         }    
         
       }
    }

    


    

    
    


    

}   
