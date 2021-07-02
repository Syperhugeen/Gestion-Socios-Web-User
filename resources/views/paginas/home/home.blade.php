@extends('layouts.credo.layout_pricnipal')




{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = 'Software para gimnasios, gym software' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}

@section('pixcel-facebook')
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1301666320204392');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1301666320204392&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

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


        >

            <template slot="titulo">
              <h1 class="text-white mb-5">
                  Software para gestionar   <slider-text :data="[
                    {name:'gimnasios'},

{name:'escuelas de danza'},
{name:'box de crossfit'},
{name:'academía de artes marciales'}

]"></slider-text>
              </h1>
            </template>
            <template slot="descripcion">
              <ul class="mb-5">
                <li class="text-white espacio-letras"> Manejo de mebresías <span class="font-secondary helper-aumenta-texto"> <b>easy</b>  </span></li>
                <li class="text-white espacio-letras"> Finanzas <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Reservas online de clases <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Control de acceso <span class="font-secondary helper-aumenta-texto"> easy </span></li>
              </ul>

               <a href="{{route('get_hablemos')}}" class="btn btn-success mr-2 cursor-pointer text-white"> Comenzar ahora</a>
               <a href="#intro" class="btn  btn-outline-light cursor-pointer"> Seguir leyendo</a>

               <img class="d-none d-lg-block " style="position: absolute; right:0; top:40%; height:auto; width:600px;"  src="{{url()}}/imagenes/Easysocio/Capturas/socios-listado-notebook.png" alt="">

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

              <h2 class="h1 mb-4 text-center "> Software para la gestión de <slider-text :data="[{name:'gimnasios'},{name:'escuelas de danza'},{name:'academias de artes marciales'},{name:'box funcionales'}]"></slider-text> </h2>
              <p class="text-center mb-0">EasySocio es una plataforma digital que te ofrece mucho más que un sistema contable para <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-administrar-un-gimnasio:-6-consejos-para-que-lo-hagas-bien/24"> administrar tu gimnasio</a>. Se trata de un conjunto de utilidades que te permitirán brindar un óptimo servicio para tus clientes al tiempo que facilita tu trabajo para que lo realices de manera rápida y sencilla.
              </p>

            </div>
          </div>
        </div>
    </section>


    <section class="site-section background-white" >
    <div class="container ">
    <div class="row justify-content-center">
      <div class="col-12 mb-5 position-relative">
          <p class="text-center text-uppercase mb-1"><strong>¿Qué resolvemos?</strong></p>
          <h3 class="text-center mb-0 h2">Nuestra solución </h3>
      </div>


      @include('paginas.home.partial.funciones')

      <p class="col-12 text-center mt-5 ">
            <a href="{{route('get_funcionalidades')}} ">Ver todas las funcionalidades</a>
      </p>

    </div>


    </div>

    </section>



    <section class="site-section background-gris-1" >

    <div class="container ">
      <div class="row justify-content-center">

      <div class="col-12 mb-5 position-relative">
          <p class="text-center text-uppercase mb-1">¿Para quién es?</p>
          <h3 class="text-center mb-0 h2">Lo creamos pensando en ...</h3>
      </div>

      <div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Gimnasios de pesas" call_to_action="Más información" url="{{route('get_programa_para_gestionar_gimancios')}}">
            <template slot="icono">
              <div class="rounded  mb-2 ">
                  <img src="{{url()}}/imagenes/Easysocio/SirvePara/pesas.jpg" class="img-fluid rounded" alt="">
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Centros de entrenamiento funcional" call_to_action="Más información" url="{{route('get_programa_para_gestionar_box_crossfit')}}">
            <template slot="icono">
            <div class="rounded  mb-2 ">
                  <img src="{{url()}}/imagenes/Easysocio/SirvePara/box-funcional.jpg" class="img-fluid rounded" alt="">
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Academías de baile" call_to_action="Más información" url="{{route('get_programa_para_gestionar_escuelas_de_danza')}}">
            <template slot="icono">
            <div class="rounded  mb-2 ">
                  <img src="{{url()}}/imagenes/Easysocio/SirvePara/danza.jpg" class="img-fluid rounded" alt="">
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Escuelas de artes marciales" call_to_action="Más información" url="{{route('get_programa_para_gestionar_escuela_de_artes_marciales')}}">
            <template slot="icono">
            <div class="rounded  mb-2 ">
                  <img src="{{url()}}/imagenes/Easysocio/SirvePara/artes-marciales.jpg" class="img-fluid rounded" alt="">
               </div>
            </template>

            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>
    </div>
    </div>

    </section>



    @include('paginas.paginas_personalizadas.planes')
    @include('paginas.paginas_personalizadas.preguntasFrecuentes')
    @include('paginas.paginas_personalizadas.blog')















@stop
