@extends('layouts.admin_layout.admin_layout')







@section('miga-de-pan')


 <h1 class="titulos-class mb-3  text-color-primary font-secondary">Editar</h1>
 <p class="parrafo-class color-text-gris mb-3"> Link pública <i class="fas fa-hand-point-right"></i> <a href="{{$Entidad->route}}"  target="_blank">{{$Entidad->name}}</a></p>

  <p class="parrafo-class color-text-gris"> Para guardar los cambios deben apretar el botón que está abajo del todo</p>

@stop

@section('content')



 {{-- formulario --}}
  {!! Form::model($Entidad,   ['route' => [$Route_editar_post,$Entidad->id],
                            'method'=> 'patch',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="row p-5">

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"> Datos</div>
        <div class="contenedor-formulario-label-fiel">
          @include('admin.'.$Carpeta_view_admin.'.formularios_partes.datos_basicos')
        </div>
      </div>


      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"> Imagen</div>
        <div class="contenedor-formulario-label-fiel">
          @include('admin.'.$Carpeta_view_admin.'.formularios_partes.datos_imagenes')
        </div>
      </div>

       <div class="contenedor-grupo-datos col-12">
        <div class="contenedor-grupo-datos-titulo">Contenido </div>
        <div class="contenedor-formulario-label-fiel">
          <div class="formulario-label-fiel">
            @include('admin.noticias.formularios_partes.aclaracion_etiquetas')
            {!! Form::label('description', 'Contenido', array('class' => 'formulario-label ')) !!}
            {!! Form::textarea('description', null ,['class' => 'formulario-field',
                                                     'rows' => 20,
                                                     'id'   => 'editor'  ]) !!}
          </div>
        </div>
      </div>






   </div>

    <div class="mt-5 mb-5 Boton-Fuente-Chica Boton-Primario-Relleno disparar-este-form">
     Guardar cambios   <i class="fas fa-angle-double-right"></i>
    </div>







  {!! Form::close() !!}

@stop



@section('vue-componenetes-cdn')
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  {{--  <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>  --}}
  <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
@stop




@section('custom-javascript-no-vue')
  CKEDITOR.replace( 'editor', @include('admin.vue_partials.config_editor') );

  var elements = document.getElementsByClassName("img-altura-chica");

  for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', function(){
    console.log(this);
    let dataACopiar = `
    (IMG)${this.src}(/IMG)(IMGT) El texto por debajo de la imagen (/IMGT)
    `;
    console.log(dataACopiar);
    let aux = document.createElement("input");
    aux.setAttribute("value", dataACopiar);
    document.body.appendChild(aux);
    aux.select();
    let validation = document.execCommand("copy");
    document.body.removeChild(aux);
    }, true);
  }


@stop
