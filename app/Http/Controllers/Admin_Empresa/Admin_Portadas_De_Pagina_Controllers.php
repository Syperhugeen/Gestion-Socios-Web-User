<?php

namespace App\Http\Controllers\Admin_Empresa;

use App\Helpers\HelpersGenerales;
use App\Http\Controllers\Controller;
use App\Interfaces\entidadCrudControllerInterface;
use App\Managers\portada_de_pagina_manager;
use App\Repositorios\ImagenRepo;
use App\Repositorios\PortadaDePaginaRepo;
use App\Traits\entidadesControllerComunesCrud;

class Admin_Portadas_De_Pagina_Controllers extends Controller implements entidadCrudControllerInterface
{
    use entidadesControllerComunesCrud;

    protected $Entidad_principal;
    protected $Nombre_entidad_plural;
    protected $Nombre_entidad_singular;
    protected $Carpeta_view_admin;
    protected $Path_view_get_admin_index;
    protected $Path_view_get_admin_crear;
    protected $Path_view_get_admin_editar;
    protected $Route_index;
    protected $Route_crear;
    protected $Route_crear_post;
    protected $Route_editar_post;
    protected $Route_luego_de_crear;
    protected $Path_carpeta_imagenes;
    protected $Nombre_del_campo_imagen;

    public function __construct(PortadaDePaginaRepo $PortadaDePaginaRepo,
        ImagenRepo $ImagenRepo) {
        $this->Entidad_principal          = $PortadaDePaginaRepo;
        $this->ImagenRepo                 = $ImagenRepo;
        $this->Nombre_entidad_plural      = 'Portadas de paginas';
        $this->Nombre_entidad_singular    = 'Portada de pagina';
        $this->Carpeta_view_admin         = strtolower(str_replace(' ', '_', $this->Nombre_entidad_plural));
        $this->Path_view_get_admin_index  = 'admin.' . $this->Carpeta_view_admin . '.home';
        $this->Path_view_get_admin_crear  = 'admin.' . $this->Carpeta_view_admin . '.crear';
        $this->Path_view_get_admin_editar = 'admin.' . $this->Carpeta_view_admin . '.editar';
        $this->Route_index                = 'get_admin_' . $this->Carpeta_view_admin . '';
        $this->Route_crear                = 'get_admin_' . $this->Carpeta_view_admin . '_crear';
        $this->Route_crear_post           = 'set_admin_' . $this->Carpeta_view_admin . '_crear';
        $this->Route_editar_post          = 'set_admin_' . $this->Carpeta_view_admin . '_editar';
        $this->Route_luego_de_crear       = $this->Route_index;
        $this->Path_carpeta_imagenes      = $this->Carpeta_view_admin . '/'; //donde se gurarda la imagen. Debe existir
        $this->Nombre_del_campo_imagen    = 'portada_de_pagina_id';

    }

    public function getPropiedades()
    {
        return ['titulo', 'sub_titulo', 'parrafo', 'llamado_a_la_accion', 'link_llamado_a_la_accion', 'posicion', 'estado', 'name', 'title_tag', 'description_tag', 'layer_opasity'];
    }

    public function getManager($Request)
    {
        $manager = new portada_de_pagina_manager(null, $Request->all());

        return $manager;
    }

    public function getImagenMiniaturaSize()
    {
        return 1200;
    }

    public function olvidarCachesAsociadoAEstaEntidad()
    {
        HelpersGenerales::forgetThisCacheKey('PortadaHome');
        HelpersGenerales::forgetThisCacheKey('contactoPortada');
        HelpersGenerales::forgetThisCacheKey('PortadaBlogs');
        HelpersGenerales::forgetThisCacheKey('BlogsSoftwareParaGimnasio');
        HelpersGenerales::forgetThisCacheKey('PortadaSoftwareParaGimnasio');
        HelpersGenerales::forgetThisCacheKey('BlogsSoftwareParaDanza');
        HelpersGenerales::forgetThisCacheKey('PortadaSoftwareParaDanza');
        HelpersGenerales::forgetThisCacheKey('PortadaSoftwareParaMarcial');
        HelpersGenerales::forgetThisCacheKey('PortadaSoftwareParaBox');
        HelpersGenerales::forgetThisCacheKey('PreciosSoftwareParaPrecios');
        HelpersGenerales::forgetThisCacheKey('hablamos');
        HelpersGenerales::forgetThisCacheKey('funciones');

    }

}
