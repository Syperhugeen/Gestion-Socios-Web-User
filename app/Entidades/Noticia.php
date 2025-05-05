<?php

namespace App\Entidades;

use App\Helpers\HelpersGenerales;
use App\Traits\entidadesMetodosComunes;
use App\Traits\entidadesMetodosDeImagenes;
use App\Traits\entidadesTagsTitleMetodos;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{

    use entidadesMetodosComunes;
    use entidadesTagsTitleMetodos;
    use entidadesMetodosDeImagenes;

    protected $table            = 'noticias';
    protected $fillable         = ['name', 'description'];
    protected $img_key          = 'noticia_id';
    protected $route_admin_name = 'get_admin_noticias_editar';
    protected $appends          = [
        'route',
        'fecha_personalizada',
        'url_img_foto_principal', 'url_img_foto_principal_chica', 'url_img_foto_principal_vertical', 'url_img_foto_principal_vertical_chica', 'contenido_render'];

    public function getRouteAdminAttribute()
    {
        return route($this->route_admin_name, $this->id);
    }

    public function getFechaPersonalizadaAttribute()
    {
        $fecha = Carbon::parse($this->created_at);

        return $fecha->format('d/m/Y');
    }

    private function getBlogPath(
        $name,
        $id
    ) {
        // 1. Normalizar el string a forma NFD (no directamente soportado, usamos transliterator_transliterate para algo similar)
        $slug = $name;

        // 2. Eliminar acentos y diacríticos
        if (class_exists('Transliterator')) {
            $slug = transliterator_transliterate('NFD; [:Nonspacing Mark:] Remove; NFC;', $slug);
        } else {
            // Fallback simple si no está instalado intl
            $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $slug);
        }

        // 3. Eliminar cualquier carácter que no sea letras, números, espacios o guiones
        $slug = preg_replace('/[^a-zA-Z0-9\s-]/', '', $slug);

        // 4. Eliminar espacios al inicio y al final
        $slug = trim($slug);

        // 5. Reemplazar uno o más espacios por un único guion
        $slug = preg_replace('/\s+/', '-', $slug);

        // 6. Convertir a minúsculas
        $slug = strtolower($slug);

        return "{$slug}/{$id}";
    }

    public function getRouteAttribute()
    {

        /**
         * ----------------------------------------------------------
         *  If the web_belong is easysocioExternalWeb,
         *  we need to create a custom route.
         * ----------------------------------------------------------
         */
        if ($this->web_belong == config('constants.web_belong.easysocioExternalWeb')) {
            $slug  = $this->getBlogPath($this->name, $this->id);
            $route = "https://easysocio.app/$this->lang/blog/$slug";

            return $route;
        }

        return route('get_pagina_noticia_individual', [HelpersGenerales::helper_convertir_cadena_para_url($this->name), $this->id]);
    }

    public function getContenidoRenderAttribute()
    {
        $cadena = $this->description;

        return HelpersGenerales::helper_convertir_caractereres_entidades_blog_o_similares($cadena);
    }

    public function getRouteNewsletterAttribute()
    {
        return route('get_pagina_newsletter_noticias_listado', [$this->id, 'mauricio@worldmaster.com.uy']);
    }

    public function getRouteEnviarNewsletterAttribute()
    {
        return route('enviar_noticias_por_email', $this->id);
    }
}
