@extends('layouts.credo.layout_pricnipal')



{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = 'Software para gimnasios, gym software' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_contacto','-') /*--}}

@section('pixcel-facebook')


@stop

@section('og-tags')
 <meta property="og:type"               content="website" />
 <meta property="og:title"              content="{{ $Titulo}} " />
 <meta property="og:description"        content="{{$DescriptionEtiqueta}}" />
 <meta property="og:image"              content="{{$ImagenParaTaG }}" />
 <meta property="og:image:secure_url"   content="{{$ImagenParaTaG }}" />
 <meta property="og:image:width"        content="250">
 <meta property="og:image:height"       content="250">


@stop


@section('data-estructurada')

 <script type="application/ld+json">
        {
         "@context": "http://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "{{$UrlDeLaPagina}}",
            "name": "{{$Titulo}}"
            }
          }
         ]
        }
</script>


@stop




@section('title')
   {{$Titulo}}
@stop


@section('MetaContent')
   {{$DescriptionEtiqueta}}
@stop

@section('MetaRobot')
 index,follow
@stop

@section('palabras-claves')
   {{$PalabrasClaves}}
@stop

@section('vue-componenetes-cdn')
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>
  {{-- <script  src="https://cdn.jsdelivr.net/npm/vue-awesome-notifications@3.1.1/dist/index.min.js"></script> --}}



@stop

@section('vue-componenetes-externos')

@stop


@section('vue')
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
{{--  @include('paginas.Estructura_partes.Header.header_comun') --}}
@stop

@section('footer')
 {{-- @include('paginas.Estructura_partes.Footer.Footer') --}}
@stop

@section('favicon')
 <link rel="shortcut icon" href="{{ asset('imagenes/favicon-easy.ico') }}">
@stop


@section('contenido')

    {{--*/  $Portada   =  $Portada /*--}}
    {{--*/  $Route     = '' /*--}}
    {{--*/ $EsPortada  = true /*--}}
    {{-- Se necesita asignar la variable $Portada y $Route. Si $Route no se quiere definir se le dará valor "" (string vacio) y toamara el link que viene del objeto portada y se usara scrool_to en el llamado a la acción --}}

    @include('paginas.paginas_personalizadas.partials.portada_molde')








    <div  class="py-2 py-lg-5" id="iniciar-contacto">
    <div class="container">
    <div class="d-flex  flex-column align-items-center justify-content-center">



    <div class="col-lg-6  px-0" id="formulario_contacto">

        <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
            @include('paginas.home.vue.Contacto.Contacto_completo_para_contacto')
        </contacto-component>
    </div>


    </div>
    </div>
    </div>
















@stop
