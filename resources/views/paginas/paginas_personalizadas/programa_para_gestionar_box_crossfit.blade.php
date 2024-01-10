@extends('layouts.credo.layout_pricnipal')




{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = 'Software para gimnasios, gym software' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_programa_para_gestionar_escuela_de_artes_marciales') /*--}}



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

@section('favicon')
 <link rel="shortcut icon" href="{{ asset('imagenes/favicon-easy.ico') }}">
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



@section('vue')

@include('paginas.home.vue.access-devices')
   @include('paginas.home.vue.section-card')
   @include('paginas.home.vue.pregunta-componente')
   @include('paginas.home.vue.slider-text')
   @include('paginas.home.vue.portada')
   @include('paginas.home.vue.simple-card')
   @include('paginas.home.vue.header-component')
   @include('paginas.home.vue.vue-instance')
@stop

@section('header')
 @include('paginas.Estructura_partes.Header.header_comun')
@stop

@section('footer')
 @include('paginas.Estructura_partes.Footer.Footer')
@stop

@section('contenido')



        <portada altura_portada="60"

        grandiente="linear-gradient(180deg, rgba(14,42,108,1) 7%, rgba(90,138,255,1) 88%, rgba(90,138,255,1) 100%)"


        >

            <template slot="titulo">
              <h1 class="text-white mb-5 col-lg-6 px-0">
                  Software para box de crossfit o funcional

              </h1>
              <ul class="mb-5">
                <li class="text-white espacio-letras"> Manejo de mebresías <span class="font-secondary helper-aumenta-texto"> <b>easy</b>  </span></li>
                <li class="text-white espacio-letras"> Finanzas <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Reservas online de clases <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Control de acceso <span class="font-secondary helper-aumenta-texto"> easy </span></li>
              </ul>

               <a href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis" class="btn btn-success mr-2 cursor-pointer text-white"> Comenzar ahora</a>
               <a href="#intro" class="btn  btn-outline-light cursor-pointer"> Seguir leyendo</a>
            </template>
            <template slot="descripcion">
            

               <img class="d-none d-lg-block " style="position: absolute; right:0; top:5%; height:auto; width:600px;"  src="{{url()}}/imagenes/Easysocio/Paquetes/crossfit-png.png" alt="">

            </template>







        </portada>

      <span id="intro"></span>



      <section class="site-section pb-5 background-gris-0" >
        <div class="container">
          <div class="row">
      <div class="col-12 mb-5 position-relative">

         @if( Session::get('esDeUruguay'))
         <div class="w-100 d-flex flex-column align-items-center mb-2">
          <div class="d-flex flex-row align-items-center">
            <small class=" mb-0 mr-2 text-center text-uppercase">Software made in Uruguay</small>
            <img class="shadow-sm mr-2 rounded-circle border border-light" height="30" width="30" src="{{url()}}/imagenes/monedas/{{  Session::get('esDeUruguay') ? 'pesos.jpg' : 'dolar.jpg'}}" alt="Moneda">
          </div>

         </div>


         @endif

              <h2 class="h1 mb-4 text-center ">Software para administrar box de crossfit o box funcionales <span class="font-secondary helper-aumenta-texto"> easy </span> </h2>
              <p class="text-center mb-0">
               Estás registrando en una planilla de excel o anotando en un cuaderno tus ventas ¡Olvídalo!
               Ahorrá tiempo y dinero con un sistema que te permita controlar y organizar tu centro de alto rendimiento y destacá en tu rubro.
              </p>
              @include('paginas.paginas_personalizadas.llamadoALaAccionPrincipalCentrado')

            </div>
          </div>
        </div>
    </section>




    <section class="site-section background-white" >
    <div class="container ">
    <div class="row justify-content-center">
      <div class="col-12 mb-5 position-relative">
          <h3 class="text-center mb-0"><strong>Herramientas que harán que tu trabajo sea <span class="font-secondary helper-aumenta-texto"> easy </span></strong></h3>


      </div>


      @include('paginas.paginas_personalizadas.principalesFunciones')
      @include('paginas.paginas_personalizadas.llamadoALaAccionPrincipalCentrado')




    </div>


    </div>

    </section>


    @include('paginas.paginas_personalizadas.beneficiosGenerales')
    @include('paginas.paginas_personalizadas.planes')
    @include('paginas.paginas_personalizadas.preguntasFrecuentes')
    @include('paginas.paginas_personalizadas.blog')
























@stop
