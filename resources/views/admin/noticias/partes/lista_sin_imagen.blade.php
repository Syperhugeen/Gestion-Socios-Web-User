<div class="col-md-6 col-lg-4 mb-4">
    <div class="servicio_lista service position-relative">
      <a v-lazy-container="{ selector: 'img' }" href="{{$Route}}">
        <img data-src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="servicio_lista_imagen">
      </a>

      <div class="position-absolute p-2 border border-white text-white h2 my-0" style="top:2px; right:2px; z-index:10; border-radius: 0px 10px 0px 10px; ">
        {{$Entidad->lang}}
      </div>
      <div class="p-3 mt-2">
        <h3 class="sub-titulos-class   mb-2">
          <a href="{{$Route}}" class="font-primary text-color-secondary">
           {{$Entidad->name}}
          </a>
        </h3>
        <p class="color-text-gris mb-2 ">
         {{$Entidad->descripcion_breve}}
        </p>
        <p>
          <a class="btn btn-primary btn-sm mb-2 mr-2" href="{{$Route}}"> Leer más  <i class="fas fa-chevron-right"></i></a>
          <a class="btn btn-outline-info mb-2 mr-2 btn-sm " href="{{$Entidad->route_newsletter}}"> Newsletter view  <i class="fas fa-chevron-right"></i></a>

         @if($Entidad->enviado_por_email != 'si')
         <a class="btn btn-outline-dark btn-sm  " href="{{$Entidad->route_enviar_newsletter}}">Enviar por email</a>
         @else
          <small>Ya se envío por email <i class="fas fa-check-circle text-success"></i> </small>
          <a class="btn btn-outline-dark btn-sm  " href="{{$Entidad->route_enviar_newsletter}}">Enviar de nuevo  email</a>
         @endif
        </p>
      </div>
    </div>
</div>
