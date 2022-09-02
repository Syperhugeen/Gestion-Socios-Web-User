<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class HelpersGenerales
{

    /**
     * Es la función que utilozo para formatear todas las respuestas para Vue.
     *
     * @return array
     */
    public static function formateResponseToVue(
        $Validacion,
        $Validacion_mensaje,
        $Data = null
    ) {
        return [
            'Validacion'         => $Validacion,
            'Validacion_mensaje' => $Validacion_mensaje,
            'Data'               => $Data,
        ];
    }

    /**
     * Undocumented function
     *
     * @param string $type Accepta: emergency,alert,critical,error,warning,notice,info,debug
     * @param [type] $fileName El nombre del archivo (será relativo a /storage/logs/)
     * @param [type] $message
     *
     * @return void
     */
    public static function log($type, $fileName, $message)
    {
        Log::useFiles(storage_path() . '/logs/' . $fileName . '.log');

        $message = 'IP: ' . strval($_SERVER['REMOTE_ADDR']) . '-> ' . $message;

        switch ($type) {
            case 'emergency':
                Log::emergency($message);
                break;
            case 'alert':
                Log::alert($message);
                break;
            case 'critical':
                Log::critical($message);
                break;
            case 'alert':
                Log::alert($message);
                break;
            case 'error':
                Log::error($message);
                break;
            case 'warning':
                Log::warning($message);
                break;
            case 'notice':
                Log::notice($message);
                break;
            case 'info':
                Log::info($message);
                break;
            case 'debug':
                Log::debug($message);
                break;
        }
    }

    /**
     * Convierte una cadena y la prepara para URL
     */
    public static function helper_convertir_cadena_para_url($cadena)
    {

        $cadena = strtolower(trim($cadena));
        //quito caracteres -
        $cadena = str_replace('-', ' ', $cadena);
        $cadena = str_replace('_', ' ', $cadena);
        $cadena = str_replace('/', ' ', $cadena);
        $cadena = str_replace('|', ' ', $cadena);
        $cadena = str_replace('"', ' ', $cadena);
        $cadena = str_replace('  ', ' ', $cadena);
        $cadena = str_replace('   ', ' ', $cadena);
        $cadena = str_replace(' ', '-', $cadena);
        $cadena = str_replace('?', '', $cadena);
        $cadena = str_replace('¿', '', $cadena);

        return $cadena;
    }

    public static function helper_convertir_cadena_solo_letras_y_numeros($cadena)
    {

        $cadena = trim($cadena);
        //quito caracteres -
        $cadena = str_replace('-', '', $cadena);
        $cadena = str_replace('_', '', $cadena);
        $cadena = str_replace('/', '', $cadena);
        $cadena = str_replace('|', '', $cadena);
        $cadena = str_replace('"', '', $cadena);
        $cadena = str_replace('?', '', $cadena);
        $cadena = str_replace('¿', '', $cadena);
        $cadena = str_replace('!', '', $cadena);
        $cadena = str_replace('¡', '', $cadena);

        return $cadena;
    }

    public static function helper_olvidar_este_cache($nombre_de_cache)
    {
        if (Cache::has($nombre_de_cache)) {
            Cache::forget($nombre_de_cache);
        }
    }

    /*  S i   e s t á   v a c i o   o   e s   n u e l o   d e v u e l v e   f a l s e   d e   l o   c o n t r a r i o
    e n t r e g a   e l   v a l o r  */
    public static function helper_dame_sino_es_null_o_vacio($variable)
    {
        if (($variable != null) || ($variable != '')) {
            return $variable;
        } else {
            return false;
        }
    }

    public static function helper_convertir_caractereres_entidades_blog_o_similares($cadena)
    {
        $cadena = str_replace('(H1)', '<h1 class="post-individual-section-h1">', $cadena);
        $cadena = str_replace('(/H1)', '</h1><hr class="post-hr" > <indice></indice>', $cadena);

        //parrafos
        $cadena = str_replace('(P)', '<p class="post-individual-p">', $cadena);
        $cadena = str_replace('(/P)', '</p>', $cadena);

        $cadena = str_replace('(I)', '<em>', $cadena);
        $cadena = str_replace('(/I)', '</em>', $cadena);

        //text bold
        $cadena = str_replace('(B)', '<b>', $cadena);
        $cadena = str_replace('(/B)', '</b>', $cadena);

        //titulos
        $cadena = str_replace('(T)', '<h2 class="post-individual-section-titulo">', $cadena);
        $cadena = str_replace('(/T)', '</h2>', $cadena);

        //sub titulos
        $cadena = str_replace('(ST)', '<h3 class="post-individual-section-sub-titulo">', $cadena);
        $cadena = str_replace('(/ST)', '</h3>', $cadena);

        //mensaje box
        $cadena = str_replace('(MBOX)', '<div class="w-100 mb-3 background-gris-0 p-2 p-lg-4 "><p class="m-0"><small>', $cadena);
        $cadena = str_replace('(/MBOX)', '</small></p></div>', $cadena);

        //ul
        $cadena = str_replace('(U)', '<ul class="post-individual-section-ul">', $cadena);
        $cadena = str_replace('(/U)', '</ul>', $cadena);

        $cadena = str_replace('(O)', '<ol class="post-individual-section-ul">', $cadena);
        $cadena = str_replace('(/O)', '</ol>', $cadena);

        //li
        $cadena = str_replace('(L)', '<li class="post-individual-section-li">

            ', $cadena);
        $cadena = str_replace('(/L)', '</li>', $cadena);

        //links
        $cadena = str_replace('(A)', '<a class="post-individual-links" href="', $cadena);
        $cadena = str_replace('(/A)', '">', $cadena);
        $cadena = str_replace('(AT)', '', $cadena);
        $cadena = str_replace('(/AT)', '</a>', $cadena);

        //img
        $cadena = str_replace('(IMG)', '<div class="w-100 d-flex flex-column align-items-center"> <img class="post-img-secundarias" data-src="', $cadena);
        $cadena = str_replace('(/IMG)', '"> </div>', $cadena);

        $cadena = str_replace('(IMGT)', '<span class="post-img-texto text-center" >', $cadena);
        $cadena = str_replace('(/IMGT)', '</span>', $cadena);

        $cadena = str_replace('(YOU)', '<div class="video-responsive" > <iframe  src="https://www.youtube.com/embed/', $cadena);
        $cadena = str_replace('(/YOU)', '" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', $cadena);

        $cadena = str_replace('(UT)', '<ul class="timeline" >', $cadena);
        $cadena = str_replace('(/UT)', '</ul>', $cadena);

        $cadena = str_replace('(LT)', '<li  >', $cadena);
        $cadena = str_replace('(/LT)', '</li>', $cadena);

        $cadena = str_replace('(TLT)', '<span class="text-color-secondary sub-titulos-class text-bold mb-2" >', $cadena);
        $cadena = str_replace('(/TLT)', '</span>', $cadena);

        $cadena = str_replace('(CODE)', '<pre class="col-12 mb-3"><code class="px-4 ', $cadena);
        $cadena = str_replace('(/CODE)', '</code></pre>', $cadena);

        $cadena = str_replace('(LENGUAJE)', '', $cadena);
        $cadena = str_replace('(/LENGUAJE)', '">', $cadena);

        /*return htmlentities($cadena, ENT_QUOTES | ENT_IGNORE, "UTF-8");*/

        return $cadena;
    }

    public static function getSimbolitoAbrir()
    {
        // $Iconos = ['🥇','✅','⭐','▷','≫','☝','🔥','【','♡','▶'];
        // $Random = array_rand($Iconos,1);
        // return $Iconos[$Random] . ' ';

        return '🥇 ';
    }

    public static function getSimbolitoCerrar()
    {
        // $Iconos = ['🔥','⚡','⭐','©','★★★★★','】','♡'];
        // $Random = array_rand($Iconos,1);

        // return  ' '. $Iconos[$Random] ;

        return ' ⭐';
    }
}
