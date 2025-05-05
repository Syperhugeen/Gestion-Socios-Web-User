<?php

namespace App\Http\Controllers\Publicas;

use App\Helpers\HelpersGenerales;
use App\Http\Controllers\Controller;
use App\Managers\envio_contacto_manager;
use App\Managers\nuevo_newsletter_manager;
use App\Repositorios\Emails\EmailsEspecificosDePaginasRepo;
use App\Repositorios\Emails\EmailsRepo;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\NewslleterUserRepo;
use Illuminate\Http\Request;

class Envio_Formularios_Controller extends Controller
{

    protected $EmpresaRepo;
    protected $EmailsRepo;
    protected $EmailsEspecificosDePaginasRepo;
    protected $NewslleterUserRepo;

    public function __construct(
        EmpresaRepo                    $EmpresaRepo,
        EmailsRepo                     $EmailsRepo,
        EmailsEspecificosDePaginasRepo $EmailsEspecificosDePaginasRepo,
        NewslleterUserRepo             $NewslleterUserRepo) {

        $this->EmpresaRepo                    = $EmpresaRepo;
        $this->EmailsRepo                     = $EmailsRepo;
        $this->EmailsEspecificosDePaginasRepo = $EmailsEspecificosDePaginasRepo;
        $this->NewslleterUserRepo             = $NewslleterUserRepo;
    }

    /**
     * Cuando alguien se suscribe al newsletter
     *
     * @return array
     */
    public function post_nuevo_newsletter(Request $Request)
    {
        $manager = new nuevo_newsletter_manager(null, $Request->all());

        if ($manager->isValid()) {
            $this->NewslleterUserRepo->crearNuevoUserNewslleter($Request->get('email'), 'es');

            return HelpersGenerales::formateResponseToVue(true, 'Email registrado al newsletter semanal con éxito');
        }

        return HelpersGenerales::formateResponseToVue(false, 'Algo no está bien.', $manager->getErrors());
    }

    public function changeUserNewsletterToNotSend($email)
    {
        $this->NewslleterUserRepo->changeUserToNotSend($email);

        return 'Te haz borrado del boletin de noticias de manera correcta. Ya no te llegarán más emails con contenidos de valor para mejorar tu negocio. ';
    }

    public function post_contacto_form(Request $Request)
    {

        $Request->attributes->add(['Color_principal' => '#ff5a5f']);
        $Request->attributes->add(['Color_fondo' => '#ff5a5f']);

        $Nombre_de_empresa = $this->EmpresaRepo->getEmpresaDatos()->name;
        //valores del request
        $name               = $Request->get('name');
        $email              = $Request->get('email');
        $mensaje            = $Request->get('mensaje');
        $Email_al_que_envia = $this->EmpresaRepo->getEmpresaDatos()->email;
        $Titulo_de_email    = 'EasySocio: contacto por web de ' . $name;
        $manager            = new envio_contacto_manager(null, $Request->all());

        $Validacion = $manager->isValid();

        if ($Validacion == true) {
            $this->EmailsRepo->EnvioEmailDeContacto($name, $email, $mensaje, $Email_al_que_envia, $Nombre_de_empresa, $Titulo_de_email, $Request);

            return [
                'Validacion'         => $Validacion,
                'Validacion_mensaje' => 'Mensaje enviado correctamente. En breve te estaremos respondiendo a ' . $email,
            ];
        } else {
            return [
                'Validacion'         => $Validacion,
                'Validacion_mensaje' => 'Upssssss! algo está mal',
                'Errores'            => $manager->getErrors(),
            ];
        }
    }


}
