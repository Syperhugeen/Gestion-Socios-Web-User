<?php 

namespace App\Repositorios;

use App\Entidades\Imagen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

/**
* Repositorio de consultas a la base de datos User
*/
class ImagenRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Imagen();
  }

   // G e t t e r s 
   public function getImagenes($nombre_del_campo,$valor_id)
   {
     return $this->getEntidad()
                 ->where('key_id',$nombre_del_campo)
                 ->where('valor_id_del_campo_key',$valor_id)
                 ->orderBy('foto_principal','desc')
                 ->get();
   } 

   // S e t t e r s
   public function setUnaImagenEnBaseDeDatos($name,$path,$Nombre_del_campo_id,$Valor_id)
   {
      $Entidad                         = $this->getEntidad();
      $Entidad->name                   = $name;
      $Entidad->path                   = $path;    
      $Entidad->key_id                 = $Nombre_del_campo_id;
      $Entidad->valor_id_del_campo_key = $Valor_id;
      $Entidad->save();
      return $Entidad;
   }


  /**
    * Es la función principal para crear una imagen.
    * 
    * @param $file -> es el archivo 
    * @param $carpetaDelArchivo -> es el nombre de la carpeta dónde se guard
    * @param $nombreDelArchivo  -> el nombre
    * @param $ExtensionDelArchivo -> la extención
    * @param $redimencionar_a  -> si se achica- En cuanto al width mantienendo el ratio de la altura
    * @param $recortar  -> recorta la imagen desde el centro es un array [ 'width' => x , 'height' => y ]
    *
    * @return void 
    */ 
  public function setImagenEnStorage($file,$carpetaDelArchivo,$nombreDelArchivo,$ExtensionDelArchivo,$redimencionar_a = null,$recortar = null)
  {
    $nombre = $carpetaDelArchivo.$nombreDelArchivo.$ExtensionDelArchivo;
    if($redimencionar_a != null)
      {
          $imagen_insert = Image::make(File::get($file))->resize($redimencionar_a, null, function ($constraint) {
                                                                         $constraint->aspectRatio();
                                                                     });
          if($recortar != null)
          {
            $imagen_insert->crop($recortar['width'], $recortar['height']);
          }

          $imagen_insert->save('imagenes/'.$nombre,70);
      }
      else
      {
         $imagen_insert = Image::make(File::get($file)); 

         if($recortar != null)
         {
           $imagen_insert->crop($recortar['width'], $recortar['height']);
         }
        
         $imagen_insert->save('imagenes/'.$nombre,70);   
      }   
  }


  public function poner_esta_imagen_como_principal($id_img)
  {
    // L a   i m a g e n   q u e   q u i e r o   p o n e r   c o m o   p r i n c i p a l 
    $imagen = $this->find($id_img);

    $imagen_pricipal_actual = $this->get_imagen_principal_de_entidad_especifica($imagen->key_id,$imagen->valor_id_del_campo_key);  

    if($imagen_pricipal_actual->count() > 0)
    {
      $imagen_pricipal_actual = $imagen_pricipal_actual->first();
      $imagen_pricipal_actual->foto_principal = null;
      $imagen_pricipal_actual->save();
    }

    $imagen->foto_principal = 'si';
    $imagen->save();
    
  }

    /**
     *  L a   u s o   p a r a   b u s c a r   l a   i m a g e n   p r i n c i p a l. Devuelve colección. 
     */
    public function get_imagen_principal_de_entidad_especifica($atributo_name,$id_del_atributo)
    {
      return $this->entidad
                  ->where('key_id',$atributo_name)
                  ->where('valor_id_del_campo_key',$id_del_atributo)
                  ->where('foto_principal','si')
                  ->get();
    }


    /**
     *  L a   u s o   p a r a   c a m b i a r   a  l a   i m a g e n   p r i n c i p a l  
     */
    public function cambio_a_imagen_principal_desde_base_repo($imagen_pricipal,$imagen)
    {
      
      if($imagen_pricipal->count() > 0)
      {
        
        $imagen_principal_efectiva = $imagen_pricipal->first();
        $imagen_principal_efectiva->foto_principal = null;
        $imagen_principal_efectiva->save();
         
        $imagen->foto_principal = 'si';
        $imagen->save();
      }
    }


  
}