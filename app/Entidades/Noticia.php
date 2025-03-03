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

    public function getRouteAttribute()
    {
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
