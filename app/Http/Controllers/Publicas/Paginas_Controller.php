<?php

namespace App\Http\Controllers\Publicas;

use App\Helpers\CurlHelper;
use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\PortadaDePaginaRepo;
use App\Servicios\ServicioApiSendEmail;
use App\Servicios\ServiciosPlanes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class Paginas_Controller extends Controller
{
    protected $NoticiasRepo;
    protected $EmpresaRepo;
    protected $CurlHelper;
    protected $PortadaDePaginaRepo;

    public function __construct(NoticiasRepo $NoticiasRepo,
        EmpresaRepo                              $EmpresaRepo,
        CurlHelper                               $CurlHelper,
        PortadaDePaginaRepo                      $PortadaDePaginaRepo) {

        $this->NoticiasRepo        = $NoticiasRepo;
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->CurlHelper          = $CurlHelper;
        $this->PortadaDePaginaRepo = $PortadaDePaginaRepo;
    }

    //Contacto
    public function get_pagina_contacto($tipo)
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $blogs   = $this->NoticiasRepo->latestBlogs();

        $Portada = Cache::remember('contactoPortada', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'contacto');
        });

        return view('paginas.paginas_personalizadas.contacto', compact('Empresa', 'blogs', 'tipo', 'Portada'));
    }

    public function get_pagina_contacto_easy()
    {

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $blogs   = $this->NoticiasRepo->latestBlogs();

        return view('paginas.paginas_personalizadas.contacto_easy_socio', compact('Empresa', 'blogs'));
    }

    //Noticias
    public function get_pagina_noticias_listado(Request $Request)
    {
        $blogs = Cache::remember('PaginaDeBlogs', 60 * 60 * 6, function () {
            return $this->NoticiasRepo->getBlogsByBelong('id', 'desc', 120, config('constants.web_belong.localWeb'), 'es');
        });

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $Portada = Cache::remember('PortadaBlogs', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'blog');
        });

        return view('paginas.noticias.noticias', compact('blogs', 'Empresa', 'Portada'));
    }

    // B l o g   I n d i v i d u a l
    public function get_pagina_noticia_individual(
        $name,
        $id
    ) {

        $Noticia = $this->NoticiasRepo->find($id);

        if (Session::has('isFrom') && Session::get('isFrom') == 'organic') {
            Session::put('isFrom', 'organic: Blog post ------ORGANIC-------' . $Noticia->name);
        }

        $Empresa            = $this->EmpresaRepo->getEmpresaDatos();
        $blogs              = '';
        $blogs_relacionados = $this->NoticiasRepo->getBlogsRelacionados($Noticia);

        return view('paginas.noticias.noticia_individual', compact('Noticia', 'Empresa', 'blogs', 'blogs_relacionados'));
    }

    public function get_pagina_newsletter_noticias_listado(

        $id,
        $Email

    ) {
        $Blog  = $this->NoticiasRepo->find($id);
        $Email = 'mauricio@worldmaster.com.uy';

        ServicioApiSendEmail::senBlogEmail($Blog, 'Mauricio', 'mauricio.worldmaster@gmail.com');

        return view('emails.newslleter_blog', compact('Blog', 'Email'));
    }

    public function get_programa_para_gestionar_gimancios()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $blogs = Cache::remember('BlogsSoftwareParaGimnasio', 2000, function () {
            return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('easysocio');
        });

        $Portada = Cache::remember('PortadaSoftwareParaGimnasio', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'software para gimnasio');
        });

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.paginas_personalizadas.programa_para_gestionar_gimnacios', compact('Empresa', 'blogs', 'Portada', 'Planes'));
    }

    public function get_programa_para_gestionar_escuelas_de_danza()
    {

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $blogs = Cache::remember('BlogsSoftwareParaDanza', 2000, function () {
            return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('easysocio');
        });

        $Portada = Cache::remember('PortadaSoftwareParaDanza', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'software para danza');
        });

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.paginas_personalizadas.programa_para_gestionar_escuelas_de_danza', compact('Empresa', 'blogs', 'Portada', 'Planes'));
    }

    public function get_programa_para_gestionar_escuela_de_artes_marciales()
    {

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $blogs = Cache::remember('BlogsSoftwareParaGimnasio', 2000, function () {
            return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('easysocio');
        });

        $Portada = Cache::remember('PortadaSoftwareParaMarcial', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'software marcial');
        });

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.paginas_personalizadas.programa_para_gestionar_artes_marciales', compact('Empresa', 'blogs', 'Portada', 'Planes'));
    }

    public function get_programa_para_gestionar_box_crossfit()
    {

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $blogs = Cache::remember('BlogsSoftwareParaGimnasio', 2000, function () {
            return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('easysocio');
        });

        $Portada = Cache::remember('PortadaSoftwareParaBox', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'software para box');
        });

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.paginas_personalizadas.programa_para_gestionar_box_crossfit', compact('Empresa', 'blogs', 'Portada', 'Planes'));
    }

    public function get_pagina_precios()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $blogs = Cache::remember('BlogsSoftwareParaGimnasio', 2000, function () {
            return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('easysocio');
        });

        $Portada = Cache::remember('PreciosSoftwareParaPrecios', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'precios');
        });

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.paginas_personalizadas.pagina_de_precios', compact('Empresa', 'blogs', 'Portada', 'Planes'));
    }

    public function get_hablemos()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $blogs = Cache::remember('BlogsSoftwareParaGimnasio', 2000, function () {
            return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('easysocio');
        });

        $Portada = Cache::remember('hablamos', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'hablamos');
        });

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.paginas_personalizadas.pagina_de_hablemos_demo', compact('Empresa', 'blogs', 'Portada', 'Planes'));
    }

    public function get_funcionalidades()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $Portada = Cache::remember('funciones', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'funciones');
        });

        $blogs = $this->NoticiasRepo->latestBlogs();

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.paginas_personalizadas.pagina_de_funciones', compact('Empresa', 'Portada', 'Planes', 'blogs'));
    }

    public function get_pagina_yoga()
    {

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $Portada = Cache::remember('funciones', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'funciones');
        });

        $blogs = $this->NoticiasRepo->latestBlogs();

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.paginas_personalizadas.pagina_yoga', compact('Empresa', 'Portada', 'Planes', 'blogs'));
    }

    public function get_personal_trainer()
    {

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $Portada = Cache::remember('funciones', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'funciones');
        });

        $blogs = $this->NoticiasRepo->latestBlogs();

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.paginas_personalizadas.pagina_personal_trainer', compact('Empresa', 'Portada', 'Planes', 'blogs'));
    }
}
