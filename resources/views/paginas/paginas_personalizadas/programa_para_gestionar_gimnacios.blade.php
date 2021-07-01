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
                  Software para administrar gimnasios
              </h1>
            </template>
            <template slot="descripcion">
              <ul class="mb-5">
                <li class="text-white espacio-letras"> Manejo de mebresías <span class="font-secondary helper-aumenta-texto"> <b>easy</b>  </span></li>
                <li class="text-white espacio-letras"> Finanzas <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Reservas online de clases <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Control de acceso <span class="font-secondary helper-aumenta-texto"> easy </span></li>
              </ul>

               <a href="#intro" class="btn btn-success mr-2 cursor-pointer text-white"> Comenzar ahora</a>
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

              <h2 class="sub-titulos-class mb-4 text-center text-color-primary">EasySocio es el Software para la gestión de gimnasios </h2>
              <p class="text-center mb-0">EasySocio es una plataforma digital que te ofrece mucho más que un sistema contable para <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-administrar-un-gimnasio:-6-consejos-para-que-lo-hagas-bien/24"> administrar tu gimnasio</a>. Se trata de un conjunto de utilidades que te permitirán brindar un óptimo servicio para tus clientes al tiempo que facilita tu trabajo para que lo realices de manera rápida y sencilla.
              </p>

            </div>
          </div>
        </div>
    </section>

    <section-card
       titulo_aclarador=""
       titulo="¿Tenés un gimnasio y te encontrás en el punto que la gestión de tus socios se hace complicada?"
       background="background-gris--1"
       order="left"
       :con_parte_oculta="true"
       url_img_chica="{{url()}}/imagenes/Easysocio/Easysocio-software-para-administrar-gimnasisos-celular.png"
       url_img_grande="{{url()}}/imagenes/Easysocio/Easysocio-software-para-administrar-gimnasisos-celular.png" >

        <template slot="description-visible">
        <p>En la industria de los negocios de acondicionamiento físico, es normal que en la medida en que comienza a crecer el volumen de clientes, cada vez se haga más difícil mantener al día los estados de cuentas de cada uno. Puede llegar a ocurrir que si son muchos no sepas distinguir quienes se encuentran al día con sus pagos y quienes te deben dinero. Si esta situación te resulta familiar haz encontrado la herramienta que necesitas para solucionar tus problemas de administración de forma sencilla y por una inversión mínima. Te invitamos a conocer EasySocio.
          </p>
        </template>
        <template slot="description-oculta">
        <p>
            Esta tecnología te permite como administrador de uno o varios gimnasios saber cuál es el estado financiero del negocio en tiempo real, desde cualquier ubicación a través de un dispositivo móvil como un celular o tu laptop. Además podrás obtener información valiosa sobre las estadísticas de los servicios más utilizados por los clientes, las tendencias en cuanto a consumo y toda la información actualizada que requieras para una gestión eficiente.
          </p>
        </template>
      </section-card>


      <section-card
       titulo_aclarador=""
       titulo="Agrégale valor a tu emprendimiento sin perder más tiempo ni energía en detalles de gestión"
       background="background-gris-1"
       order="right"
       :con_parte_oculta="true"
       url_img_chica="{{url()}}/imagenes/Easysocio/Easysocio-software-para-administrar-gimnasisos-notebook.png"
       url_img_grande="{{url()}}/imagenes/Easysocio/Easysocio-software-para-administrar-gimnasisos-notebook.png" >

        <template slot="description-visible">
         <p>Los gimnasios hoy en día son uno de los emprendimientos de mayor auge. La industria del fittness y del cuidado personal se encuentra al alza, ya que millones de personas acuden en búsqueda de la oferta de productos y servicios que allí se ofrecen con la finalidad de mejorar su calidad de vida. Es un campo de trabajo y de inversión que abarca muchos aspectos, que van desde la estética personal, al bienestar físico y la salud.
          </p>
        </template>
        <template slot="description-oculta">
        <p>
          Una sociedad que promueve el cuidado personal a través de la promoción de buenas prácticas y hábitos saludables en los individuos, resulta un ambiente ideal para el surgimiento de muchas ideas y modelos de negocios asociados al cuidado del bienestar físico. Así que, bien sea que tienes un gimnasio con equipos para ejercicios anaeróbicos (pesas y máquinas de resistencia) una escuela de artes marciales, o un centro para las últimas tendencias del entrenamiento como el Crossfit, el bootcamp o el TRX, ya diste el primer paso y realizaste la inversión más importante, ahora lo que necesitas son los medios para <a href="https://gestionsocios.com.uy/blog/las-cuatro-reglas-de-oro-para-tener-un-gimnasio-exitoso/25">llevar al éxito a tu emprendimiento</a>.
          </p>
          <p>
          Para eso, no lo dudes, el mejor aliado con el que puedes contar es esta herramienta informática multifuncional que te ayudará con la administración de negocio para que puedas dedicar más tiempo a pensar en ofertas de servicios innovadores y estrategias de <a href="https://gestionsocios.com.uy/blog/6-estrategias-de-marketing-para-gimnasios/29">marketing</a>  que te permitan aumentar y fidelizar la clientela que requieres para lograr la rentabilidad que deseas de tu inversión.
          </p>
        </template>
      </section-card>


    <section class="site-section background-white" >
    <div class="container ">
    <div class="row justify-content-center">
      <div class="col-12 mb-5 position-relative">
          <p class="text-center text-uppercase"><strong>Funcionalidades</strong></p>

      </div>


      @include('paginas.paginas_personalizadas.principalesFunciones')





    </div>


    </div>

    </section>


    @include('paginas.paginas_personalizadas.beneficiosGenerales')
    @include('paginas.paginas_personalizadas.planes')
    @include('paginas.paginas_personalizadas.preguntasFrecuentes')
    @include('paginas.paginas_personalizadas.blog')
























@stop
