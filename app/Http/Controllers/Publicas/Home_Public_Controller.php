<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\PortadaDePaginaRepo;
use Illuminate\Support\Facades\Cache;
use App\Servicios\ServiciosPlanes;




class Home_Public_Controller extends Controller
{
   
    protected $EmpresaRepo;
    protected $NoticiasRepo;  
    protected $PortadaDePaginaRepo;
    protected $ServiciosPlanes;
  

    public function __construct(EmpresaRepo         $EmpresaRepo, 
                                NoticiasRepo        $NoticiasRepo, 
                                PortadaDePaginaRepo $PortadaDePaginaRepo, 
                                ServiciosPlanes     $ServiciosPlanes
                                )
    {        
        $this->EmpresaRepo            = $EmpresaRepo;
        $this->NoticiasRepo           = $NoticiasRepo;
        $this->PortadaDePaginaRepo    = $PortadaDePaginaRepo;
        $this->ServiciosPlanes        = $ServiciosPlanes;
    }

    public function get_home(Request $Request)
    {                  
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();         
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();    
        $Portada        = Cache::remember('PortadaHome', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','home');
                          });  

        $Planes         = $this->ServiciosPlanes->getPlanes();

        dd($Planes);

        return view('paginas.home.home', compact('Empresa','blogs','Portada','Planes'));
    }


}
