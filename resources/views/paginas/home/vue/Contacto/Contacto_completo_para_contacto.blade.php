<div v-if="!se_envio" class="container">

<div class="d-flex  flex-column align-items-center justify-content-center mb-5">
        <div class="col-6 col-lg-5 p-4 p-lg-5 mb-3">
            <img src="{{url()}}/imagenes/team/mauricio-costanza-atencion-al-pubico-Easysocio-worldmaster-webs.jpg" class="img-fluid  rounded-circle ">
        </div>



        <div class="col-12 col-lg-10 ">
           <p class="text-center color-text-gris">
                Hay un ninja <span class="color-text-success">disponible</span> para atenderte.
            </p>

        </div>

    </div>

    <h3 class="text-center mb-5">
    Te podés contactar de 3 maneras diferentes
    </h3>

    <ol class="mb-5">
    <li class="mb-3">  Llamá al celular <strong>{{$Empresa->celular}}</strong>. <br>Desde fuera de Uruguay el número sería +598 {{ substr( $Empresa->celular,1)}}.  </li>
    <li class="mb-3">  Envía un mensaje por Whatsapp {{$Empresa->celular}}  <a href="{{$Empresa->link_whatsapp_send}}" class="btn btn-success">
          Click aquí para enviar mensaje <i class="fab fa-whatsapp"></i>

          </a>  </li>
          </ol>




   















</div>
@include('paginas.home.vue.Contacto.PartialLuegoEnvio')
