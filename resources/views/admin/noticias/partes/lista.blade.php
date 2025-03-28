
<div class="col-md-6 col-lg-4 mb-4">
    <div class="servicio_lista service position-relative">



      <a v-lazy-container="{ selector: 'img' }" href="{{$Route}}">
        <img data-src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="servicio_lista_imagen">
      </a>
      <div class="p-3 mt-2">
        <h3 class="h5  mb-2">
          <a href="{{$Route}}" class="font-primary ">
           {{$Entidad->name}}
          </a>
        </h3>
        <p class="color-text-gris mb-2 h6">
         {{$Entidad->descripcion_breve}}
        </p>
        <p>
          <a href="{{$Route}}"> Leer más <i class="fas fa-chevron-right"></i></a>
        </p>
      </div>
    </div>
</div>
