<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use App\Helpers\CurlHelper;
use App\Repositorios\PortadaDePaginaRepo;



class Paginas_Controller extends Controller
{
 
    protected $NoticiasRepo;
    protected $EmpresaRepo; 
    protected $CurlHelper;
    protected $PortadaDePaginaRepo;

    public function __construct(NoticiasRepo        $NoticiasRepo,
                                EmpresaRepo         $EmpresaRepo,                                 
                                CurlHelper          $CurlHelper,
                                PortadaDePaginaRepo $PortadaDePaginaRepo )
    {
      
        $this->NoticiasRepo        = $NoticiasRepo;
        $this->EmpresaRepo         = $EmpresaRepo;       
        $this->CurlHelper          = $CurlHelper;
        $this->PortadaDePaginaRepo = $PortadaDePaginaRepo;
      
    }

    //Contacto
    public function get_pagina_contacto($tipo)
    {       
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();    
        
        $Portada  = Cache::remember('contactoPortada', 2000, function(){
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','contacto');
            });       

        return view('paginas.paginas_personalizadas.contacto', compact('Empresa','blogs','tipo','Portada'));
        
    }

    public function get_pagina_contacto_easy()
    {
      
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        
        return view('paginas.paginas_personalizadas.contacto_easy_socio', compact('Empresa','blogs'));
    }

   
    



    //Noticias
    public function get_pagina_noticias_listado(Request $Request)
    {
        $blogs    = Cache::remember('PaginaDeBlogs', 2000, function(){
                    return $this->NoticiasRepo->getEntidadActivasYOrdenadasSegunPaginadas('id', 'desc', 100);
                    });

        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();

        $Portada  = Cache::remember('PortadaBlogs', 2000, function(){
                    return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','blog');
                    });
        

        return view('paginas.noticias.noticias',compact('blogs','Empresa','Portada'));
    }

    // B l o g   I n d i v i d u a l 
    public function get_pagina_noticia_individual($name,$id)  {
       
        $Noticia              = $this->NoticiasRepo->find($id);
        $Empresa              = $this->EmpresaRepo->getEmpresaDatos();        
        $blogs                = '';
        $blogs_relacionados   = $this->NoticiasRepo->getBlogsRelacionados($Noticia);
        
        return view('paginas.noticias.noticia_individual',compact('Noticia','Empresa','blogs','blogs_relacionados'));
    }



  




    public function get_programa_para_gestionar_gimancios()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $blogs    = $this->NoticiasRepo->getUltimosBlogs();

         $blogs   = Cache::remember('BlogsSoftwareParaGimnasio', 2000, function(){
                    return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('easysocio');
                    });

        $Portada  = Cache::remember('PortadaSoftwareParaGimnasio', 2000, function(){
                    return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','software para gimnasios');
                    });

        
        return view('paginas.paginas_personalizadas.programa_para_gestionar_gimnacios', compact('Empresa','blogs','Portada'));
    }

    

   



    



}