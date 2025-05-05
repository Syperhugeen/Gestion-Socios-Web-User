<?php

namespace App\Http\Controllers\Admin_Empresa;

use App\Helpers\CurlHelper;
use App\Helpers\HelpersGenerales;
use App\Http\Controllers\Controller;
use App\Interfaces\entidadCrudControllerInterface;
use App\Managers\noticia_manager;
use App\Repositorios\ImagenRepo;
use App\Repositorios\NewslleterUserRepo;
use App\Repositorios\NoticiasRepo;
use App\Traits\entidadesControllerComunesCrud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Admin_Noticias_Controllers extends Controller implements entidadCrudControllerInterface
{
    use entidadesControllerComunesCrud;

    protected $NoticiasRepo;

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
    protected $ImagenRepo;

    public function __construct(
        NoticiasRepo $NoticiasRepo,
        ImagenRepo   $ImagenRepo) {
        $this->Entidad_principal          = $NoticiasRepo;
        $this->ImagenRepo                 = $ImagenRepo;
        $this->Nombre_entidad_plural      = 'Noticias';
        $this->Nombre_entidad_singular    = 'Noticia';
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
        $this->Nombre_del_campo_imagen    = strtolower($this->Nombre_entidad_singular) . '_id';
    }

    public function getPropiedades()
    {
        return ['name', 'descripcion_breve', 'description', 'estado', 'url_video', 'tags', 'title_tag', 'description_tag', 'lang', 'web_belong'];
    }

    public function get_admin(Request $Request)
    {
        $Entidades          = $this->Entidad_principal->getAllBlogsByWebBelongPaginated($Request, config('constants.web_belong.localWeb'), 20);
        $Titulo             = $this->Nombre_entidad_plural;
        $Route_crear        = $this->Route_crear;
        $Route_busqueda     = $this->Route_index;
        $Carpeta_view_admin = $this->Carpeta_view_admin;

        $CantidadDeEnviosPendientes = Cache::has('sendEmailInQueue') ? Cache::get('sendEmailInQueue')->count() : 0;

        return view($this->Path_view_get_admin_index, compact('Entidades', 'Route_crear', 'Titulo', 'Route_busqueda', 'Carpeta_view_admin', 'CantidadDeEnviosPendientes'));
    }

    public function get_admin_noticias_easy_externa(Request $Request)
    {
        $Entidades          = $this->Entidad_principal->getAllBlogsByWebBelongPaginated($Request, config('constants.web_belong.easysocioExternalWeb'), 20);
        $Titulo             = $this->Nombre_entidad_plural;
        $Route_crear        = $this->Route_crear;
        $Route_busqueda     = $this->Route_index;
        $Carpeta_view_admin = $this->Carpeta_view_admin;

        $CantidadDeEnviosPendientes = Cache::has('sendEmailInQueue') ? Cache::get('sendEmailInQueue')->count() : 0;

        return view($this->Path_view_get_admin_index, compact('Entidades', 'Route_crear', 'Titulo', 'Route_busqueda', 'Carpeta_view_admin', 'CantidadDeEnviosPendientes'));
    }

    public function getManager($Request)
    {
        $manager = new noticia_manager(null, $Request->all());

        return $manager;
    }

    public function olvidarCachesAsociadoAEstaEntidad()
    {

        foreach (config('constants.web_belong') as $key => $webBelong) {
            foreach (config('constants.available_langs') as $key => $lang) {
                $cacheKey = config('cache.cacheKeys.latestBlogs.key') . "_{$lang}_{$webBelong}";
                HelpersGenerales::forgetThisCacheKey($cacheKey);
            }
        }

        HelpersGenerales::forgetThisCacheKey('PaginaDeBlogs');
    }

    public function enviar_noticias_por_email($id)
    {

        if (Cache::has('sendEmailInQueue')) {
            return redirect()->back()->with('alert-rojo', 'Ya hay emails en cola. Luego de que el listado quede en cero ahí se podrá preparar de nuevo.');
        }

        $Blog                = $this->Entidad_principal->find($id);
        $UserNewsletterRepo  = new NewslleterUserRepo();
        $UserNewsletterTodos = $UserNewsletterRepo->getAllUserNewsletter();

        // me fijo los emails disponibles en la app
        $ip     = strval($_SERVER['REMOTE_ADDR']);
        $header = [
            'Token:EasyToken5224874@',
            'Ip:' . $ip,
        ];

        $Response = CurlHelper::getUrlData('https://app.gestionsocios.com.uy/get_empresas_curl', $header);

        if ($Response['Https_status'] == '200') {
            $Empresas = collect($Response['Data']->Data);

            $Empresas = $Empresas->filter(function ($Empresa) use ($UserNewsletterTodos) {
                return count($Empresa->servicios_contratados_a_empresas_activos) == 0 && !$UserNewsletterTodos->contains('email', $Empresa->email);
            });

            foreach ($Empresas as $Empresa) {
                $UserNewsletterRepo->crearNuevoUserNewslleter($Empresa->email,$Empresa->lang);
            }
        }

        $UsuariosNewsletterAEnviar = $UserNewsletterRepo->getUserAEnviar($id,$Blog->lang);

        $collectionToSaveInCache = collect([]);

        if ($UsuariosNewsletterAEnviar->count() > 0) {
            foreach ($UsuariosNewsletterAEnviar as $UserNewsletter) {
                $objetData                 = new \stdClass;
                $objetData->blog           = $Blog;
                $objetData->UserNewsletter = $UserNewsletter;
                $collectionToSaveInCache->push($objetData);

                $convierto_enArray = explode(',', $UserNewsletter->ultimo_blog_enviado_id);
                array_push($convierto_enArray, $id);
                $UserNewsletterRepo->setAtributoEspecifico($UserNewsletter, 'ultimo_blog_enviado_id', implode(",", $convierto_enArray));
            }

            Cache::put('sendEmailInQueue', $collectionToSaveInCache, 2000);

            $this->Entidad_principal->setAtributoEspecifico($Blog, 'enviado_por_email', 'si');
        }

        return redirect()->back()->with('alert', 'Se preparó para enviar');
    }

    public function blogFullList()
    {
        $blogs = $this->Entidad_principal->getBlogsByBelong('id', 'desc',null, config('constants.web_belong.localWeb'), 'es');

        $string = '<!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Lista de Blogs</title>
        </head>
        <body>
            <ul>';

        foreach ($blogs as $blog) {
            $string .= '<li>' . htmlspecialchars($blog->route) . '</li>';
        }

        $string .= '</ul>
        </body>
        </html>';

        return $string;
    }
}
