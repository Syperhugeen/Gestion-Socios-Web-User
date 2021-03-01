<div v-if="!se_envio" class="container">

<div class="d-flex  flex-column align-items-center justify-content-center mb-5">
        <div class="col-6 col-lg-5 p-3 p-lg-5 mb-3">
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
    <li class="mb-3">  Llamá al celular <strong>{{$Empresa->celular}}</strong>. <br>Desde fuera de Uruguay el número sería 598 {{ substr( $Empresa->celular,1)}}.  </li>
    <li class="mb-3">  Envía un mensaje por Whatsapp {{$Empresa->celular}}  <a href="{{$Empresa->link_whatsapp_send}}" class="btn btn-success">
          Click aquí para enviar mensaje <i class="fab fa-whatsapp"></i>

          </a>  </li>
          <li class="mb-3">  Rellená el formulario de aquí abajo y te responderemos muy rápido por email  <i class="fas fa-hand-point-down"></i> </li>
    </ol>




    <div class="row mx-0 w-100 mb-5 ">
      <h3 class="col-12 text-bold mb-4">1 - Explicá lo que necesitás.</h3>
      <div class="col-12">
        <textarea v-model="data_mensaje.mensaje" class="border-primary" cols="30" rows="4" :class="classImput" placeholder="Explica brevemente lo que necesitás"></textarea>
      </div>
    </div>


    <div class="row mx-0 w-100 mb-5">

      <h3 class="col-12 text-bold  mb-4">2 - Dejá tus datos.</h3>

      <div class="col-12 col-lg-6 mb-2">
        <input v-model="data_mensaje.name" type="text" :class="classImput" placeholder="Tu nombre">
      </div>

       <div class="col-12 col-lg-6 mb-2">
         <input v-model="data_mensaje.nombre_empresa" type="text" :class="classImput" placeholder="Tu empresa">
      </div>

      <div class="col-12 col-lg-6 mb-2">
        <input v-model="data_mensaje.email" type="email" :class="classImput" placeholder="Tu email">
      </div>

      <div class="col-12 col-lg-6 mb-2">
        <input v-model="data_mensaje.celular" type="number" :class="classImput" placeholder="Un celular válido">
      </div>

    </div>














    <div class="row mx-0 mt-4">

      <div class="col-md-6" v-if="errores" >
        <div :class="classTextColor" v-for="error in errores">@{{error}}</div>
      </div>

      <div class="col-md-12">
        <div v-if="cargando" class="flex-column align-items-center">
          <div class="cssload-tube-tunnel" :class="classCargadorColor"></div>
        </div>
        <div v-else v-on:click="enviarMensaje" :class="classBoton" value="Enviar mensaje">
          Enviar solicitud ahora
        </div>
      </div>
      <div>

      </div>

    </div>
    <div class="row align-items-center justify-content-center mb-4 mt-4">
      <div class="row  align-items-center justify-content-center">


         <div class="col-12 text-center parrafo-class p-3 mb-1 color-text-gris" >
          {{$Empresa->texto_tiempo_respuesta_contacto}}
         </div>


      </div>

    </div>


</div>
@include('paginas.home.vue.Contacto.PartialLuegoEnvio')
