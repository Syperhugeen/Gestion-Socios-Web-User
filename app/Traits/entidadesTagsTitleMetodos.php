<?php

namespace App\Traits;
use App\Helpers\HelpersGenerales;
use Carbon\Carbon;

trait entidadesTagsTitleMetodos{
    

    public function getSimboloRandom()
    {
        $MasSimbolos = [];
        $Iconos = ['🥇','✅','⭐','▷','≫','☝','🔥','【','♡','▶'];
        $Random = array_rand($Iconos,1);

        return '🥇 ';
    }

    public function getSimboloCierreRandom()
    {
        
        $Iconos = ['🔥','⚡','⭐','©','★★★★★','】','♡'];
        $Random = array_rand($Iconos,1);

        return  $this->añoDestaque() ;
    }

    public function añoDestaque()
	{
		$Año = Carbon::now()->year;

		return ' 【 ' . $Año . ' 】';
	}

    public function getTituloDeLaPaginaAttribute()
    {
        if(($this->title_tag === null) || ($this->title_tag === ''))
        {
            // P o r   s i   n o   e x i s t e   l a   p r o p i e d a d  
            if(isset($this->titulo))
            {
                $string = $this->getSimboloRandom() . $this->titulo . $this->getSimboloCierreRandom();
            }
            else
            {
                $string = $this->name;
            }    

            return $this->getSimboloRandom() .  HelpersGenerales::helper_convertir_cadena_solo_letras_y_numeros($string) . $this->getSimboloCierreRandom();
        }
        else
        {
            return $this->getSimboloRandom() .  $this->title_tag .  $this->getSimboloCierreRandom();
        }
    }

    public function getDescriptionDeLaPaginaAttribute()
    {
        if(($this->description_tag === null) || ($this->description_tag === ''))
        {
            $Cadena  = '';

            // P o r   s i   n o   e x i s t e   l a   p r o p i e d a d  
            if(isset($this->sub_titulo))
            {
                if(($this->sub_titulo != null) || ($this->sub_titulo != ''))
                {
                    $Cadena .= $this->getSimboloRandom() .  $this->sub_titulo . '. ';
                }

                if(($this->parrafo != null) || ($this->parrafo != ''))
                {
                    $Cadena .= $this->getSimboloRandom() .  $this->parrafo . '. ' .  $this->getSimboloCierreRandom();
                }   

                return $Cadena;  
            }
            else
            {
               return $this->getSimboloRandom() . $this->descripcion_breve .  $this->getSimboloCierreRandom();
            }    
              
        }
        else
        {
            return $this->getSimboloRandom() . $this->description_tag .  $this->getSimboloCierreRandom();
        }
    }

}    