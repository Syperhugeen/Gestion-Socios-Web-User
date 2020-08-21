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

        return view('paginas.paginas_personalizadas.contacto', compact('Empresa','blogs','tipo'));
        
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
                    return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','blog sobre desarrollo de paginas web y seo');
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



  


    public function get_pagina_de_web_profesionales()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        
        $blogs    = Cache::remember('BlogsPaginasWebPymes', 2000, function(){
                    return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('paginas webs');
                    });

        $Portada  = Cache::remember('PortadaPaginasWebParaProfesionales', 2000, function(){
                    return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','páginas webs para profesionales');
                    });
        return view('paginas.paginas_personalizadas.webs_profesionales', compact('Empresa','blogs','Portada'));
    }

    public function get_pagina_de_web_para_pymes()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $blogs    = Cache::remember('BlogsPaginasWebPymes', 2000, function(){
                    return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('paginas webs');
                    });

        $Portada  = Cache::remember('PortadaPaginasWebPymes', 2000, function(){
                    return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','páginas webs para pymes');
                    });
        return view('paginas.paginas_personalizadas.webs_para_pymes', compact('Empresa','blogs','Portada'));
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

    public function get_programa_para_gestionar_academias_de_baile()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $blogs    = Cache::remember('BlogsSoftwareParaacademia', 2000, function(){
                    return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor('easysocio');
                    });

        $Portada  = Cache::remember('PortadaSoftwareParaAcademiasDeBaile', 2000, function(){
                    return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','programa para administrar academia de baile');
                    });

        return view('paginas.paginas_personalizadas.programa_para_gestionar_academias', compact('Empresa','blogs','Portada'));
    }

    public function get_pagina_google_ads()
    {
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $blogs    = Cache::remember('BlogsSoftwareParaGimnasio', 2000, function(){
                    return $this->NoticiasRepo->getBlogsRelacionadosConEsteValor(['seo', 'sem','marketing','ads']);
                    });

        $Portada  = Cache::remember('PortadaSoftwareParaGoogleSEM', 2000, function(){
                    return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','Aparece primero en Google ');
                    });
        return view('paginas.paginas_personalizadas.googe_ads_servicio', compact('Empresa','blogs','Portada'));
    }

    public function get_easy_socio($pais)
    {

        //ip del que navega
        $ip  = strval($_SERVER['REMOTE_ADDR']);   

        if( Session::has('Pais')  )
        { 
          if(strcasecmp(Session::get('Pais')['Pais'],$pais) === 0)
          {
                //la sesion coincide con la url
          }
          else
          {
            Session::forget('Pais');
          }         
        }
        if(!Session::has('Pais'))
        {



        
           
       
                            

                $info_pais = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

                $Data_por_defecto = [
                          'Pais'               => 'Uruguay',
                          'Codigo_pais'        => 'UY',
                         
                          'Moneda'             => 'UYU',
                          
                        ]; //manejo el error

                

               
                //me fijo que exista
                if($info_pais  === false)
                {
                    //manejo la error
                    Session::put('Pais',$Data_por_defecto);
                }   
                else
                {
                    //veo si dio correctamente el pais
                    if($info_pais->geoplugin_status == 200)
                    {


                           //tres posibilidades
                           $Paises_de_easy_socio = Cache::remember('Paises', 1000, function() use($ip) {
                              return  $this->CurlHelper->getUrlData('http://apptest.gestionsocios.com.uy/get_paises',
                                                             [
                                                                'Maurico:Funciona',
                                                                'Ip:'.$ip
                                                             ]);
                           }); 

                           //me fijo si está bien
                           if($Paises_de_easy_socio['Https_status'] != 200 || $Paises_de_easy_socio['Data']->Validacion != true )
                           {
                                Cache::forget('Paises');

                                //intento de nuevo
                                $Paises_de_easy_socio = $this->CurlHelper->getUrlData('http://apptest.gestionsocios.com.uy/get_paises',
                                                             [
                                                                'Maurico: Funciona',
                                                                'Ip:'.$ip
                                                             ]);

                                if($Paises_de_easy_socio['Https_status'] == 200 && $Paises_de_easy_socio['Data']->Validacion )
                                {
                                    Cache::put('Paises',$Paises_de_easy_socio,1000);
                                } 
                                else
                                {
                                    Session::put('Pais',$Data_por_defecto);
                                    return redirect()->route('get_easy_socio', Session::get('Pais')['Pais']);
                                }   

                           }

                           
                           $Paises_de_easy_socio = $Paises_de_easy_socio['Data']; 

                           $Paises_de_easy_socio = collect($Paises_de_easy_socio->Paises);

                           //El pais de la url está en EasySocio
                           $Paises_filtrado_por_url = $Paises_de_easy_socio->filter(function ($item) use ($pais) {
                                                        return false !== stristr($item->name, $pais);
                                                    }); 

                           if($Paises_filtrado_por_url->count() > 0)
                           {
                                //El pais del visitante está en EasySocio
                                if($Paises_de_easy_socio->where('code',$info_pais->geoplugin_countryCode)->count() > 0)
                                {
                                    

                                    if(strcasecmp($info_pais->geoplugin_countryName,$pais) === 0)
                                    {
                                        Session::put('Pais', 
                                         [
                                          'Pais'               => $info_pais->geoplugin_countryName,
                                          'Codigo_pais'        => $info_pais->geoplugin_countryCode,
                                          'Moneda_simbolo'     => $info_pais->geoplugin_currencySymbol_UTF8,
                                         ]

                                         );
                                    }
                                    else
                                    {
                                      $Pais_base = $Paises_filtrado_por_url->first();
                                      Session::put('Pais', 
                                         [
                                          'Pais'               => $Pais_base->name,
                                          'Codigo_pais'        => $Pais_base->code,
                                          'Moneda_simbolo'     => $Pais_base->currencyCode,
                                         ]

                                         );  
                                      return redirect()->route('get_easy_socio', Session::get('Pais')['Pais']);
                                    }

                                     
                                }
                                else
                                {
                                   Session::put('Pais',$Data_por_defecto);
                                   return redirect()->route('get_easy_socio', Session::get('Pais')['Pais']);
                                }
                           }
                           else
                           {
                             Session::put('Pais',$Data_por_defecto);
                             return redirect()->route('get_easy_socio', Session::get('Pais')['Pais']);
                           }

                          // Url contiene pais: Aquí se debería respetar el pais del cliente si es qué está en EasySocio 


                          // El país del usuario está en EasySocio:

                          // El país del usuario no está en Easy Socio:

                        
                    }
                    else
                    {
                      //manejo la error
                      Session::put('Pais',$Data_por_defecto);
                      return redirect()->route('get_easy_socio', Session::get('Pais')['Pais']);
                    }
                } 

       

        } 


      

       


        // Ver contenido del array
        $Pais   = Session::get('Pais');
        $Paises = Cache::remember('Paises', 1000, function() use ($ip) {
                              return  $this->CurlHelper->getUrlData('http://apptest.gestionsocios.com.uy/get_paises',
                                                             [
                                                                'Maurico: Funciona',
                                                                'Ip:'.$ip
                                                             ]);
                           });
        
        $Paises   = $Paises['Data']->Paises; 
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();
        $blogs    = $this->NoticiasRepo->getUltimosBlogs();
        return view('paginas.paginas_personalizadas.easysocio', compact('Empresa','blogs','Pais','Paises'));
    }



    



}