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
use Illuminate\Support\Facades\Mail;

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

    public function __construct(NoticiasRepo $NoticiasRepo,
        ImagenRepo                               $ImagenRepo)
    {
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
        return ['name', 'descripcion_breve', 'description', 'estado', 'url_video', 'tags', 'title_tag', 'description_tag'];
    }

    public function getManager($Request)
    {
        $manager = new noticia_manager(null, $Request->all());

        return $manager;
    }

    public function olvidarCachesAsociadoAEstaEntidad()
    {
        HelpersGenerales::helper_olvidar_este_cache('UltimosBlogs');
        HelpersGenerales::helper_olvidar_este_cache('PaginaDeBlogs');
    }

    public function enviar_noticias_por_email($id)
    {
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

        if ($Response['Https_status'] == '200')
        {
            $Empresas = collect($Response['Data']->Data);

            $Empresas = $Empresas->filter(function ($Empresa) use ($UserNewsletterTodos)
            {
                return count($Empresa->servicios_contratados_a_empresas_activos) == 0 && !$UserNewsletterTodos->contains('email', $Empresa->email);
            });

            foreach ($Empresas as $Empresa)
            {
                $UserNewsletterRepo->crearNuevoUserNewslleter($Empresa->email);
            }
        }

        $UsuariosNewsletterAEnviar = $UserNewsletterRepo->getUserAEnviar($id);

        if ($UsuariosNewsletterAEnviar->count() > 0)
        {
            foreach ($UsuariosNewsletterAEnviar as $UserNewsletter)
            {
                $Email = $UserNewsletter->email;

                Mail::send('emails.newslleter_blog',

                    //con esta funcion le envia los datos a la vista.
                    compact('Blog', 'Email'),
                    function ($m) use ($Blog, $Email)
                    {

                        $m->from('mauricio@gestionsocios.com.uy', 'Easysocio blog');

                        $m->to($Email,
                            $Email)->subject($Blog->name . ' 🚀');
                    }
                );

                $convierto_enArray = explode(',', $UserNewsletter->ultimo_blog_enviado_id);

                array_push($convierto_enArray, $id);

                $UserNewsletterRepo->setAtributoEspecifico($UserNewsletter, 'ultimo_blog_enviado_id', implode(",", $convierto_enArray));
            }

            $this->Entidad_principal->setAtributoEspecifico($Blog, 'enviado_por_email', 'si');
        }

        return redirect()->back()->with('alert', 'Se envío con éxitos');
    }

}
