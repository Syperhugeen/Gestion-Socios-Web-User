<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\PortadaDePaginaRepo;
use App\Servicios\ServiciosPlanes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Home_Public_Controller extends Controller
{

    protected $EmpresaRepo;
    protected $NoticiasRepo;
    protected $PortadaDePaginaRepo;

    public function __construct(EmpresaRepo $EmpresaRepo,
        NoticiasRepo $NoticiasRepo,
        PortadaDePaginaRepo $PortadaDePaginaRepo
    ) {
        $this->EmpresaRepo = $EmpresaRepo;
        $this->NoticiasRepo = $NoticiasRepo;
        $this->PortadaDePaginaRepo = $PortadaDePaginaRepo;

    }

    public function get_home(Request $Request)
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $blogs = $this->NoticiasRepo->getUltimosBlogs();
        $Portada = Cache::remember('PortadaHome', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'home');
        });

        $Planes = ServiciosPlanes::getPlanes();

        return view('paginas.home.home', compact('Empresa', 'blogs', 'Portada', 'Planes'));
    }

}
