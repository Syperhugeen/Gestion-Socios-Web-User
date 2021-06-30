@extends('layouts.credo.layout_pricnipal')




{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = 'Software para gimnasios, gym software' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_funcionalidades') /*--}}

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
                 ¿Para qué sirve easysocio?
              </h1>
            </template>
            <template slot="descripcion">
              <ul class="mb-5">
                <li class="text-white espacio-letras"> Manejo de mebresías <span class="font-secondary helper-aumenta-texto"> <b>easy</b>  </span></li>
                <li class="text-white espacio-letras"> Finanzas <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Reservas online de clases <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Control de acceso <span class="font-secondary helper-aumenta-texto"> easy </span></li>
              </ul>

               <a href="#intro" class="btn  btn-outline-light cursor-pointer"> Seguir leyendo</a>

               <img class="d-none d-lg-block " style="position: absolute; right:0; top:40%; height:auto; width:600px;"  src="{{url()}}/imagenes/Easysocio/Capturas/socios-listado-notebook.png" alt="">

            </template>







        </portada>

      <span id="intro"></span>



      <section class="site-section pb-5 background-gris--1" >
        <div class="container">
          <div class="row">
      <div class="col-12 mb-5 position-relative">



              <h2 class="sub-titulos-class mb-4 text-center text-color-primary"> Que tu trabajo sea <span class="font-secondary helper-aumenta-texto">easy  </span> </h2>
              <p class="text-center mb-0"> Funcionalidades creadas para tu tipo de negocio que te permitirán ahorrar tiempo y dinero.
              </p>

            </div>
          </div>
        </div>
    </section>



    <section-card
      titulo_aclarador="¿Qué contrataron y cuándo se vence? ¿Quién tiene que pagar?"
      titulo=""
      background=""

      order="left"
      :con_parte_oculta="false"
      url_img_chica="{{url()}}/imagenes/Drwas/mebresias.png"
      url_img_grande="{{url()}}/imagenes/Drwas/mebresias.png" >

      <template slot="description-visible">
      <h3 class="mb-4">Manejo de mebresías <span class="font-secondary helper-aumenta-texto"> easy </span> </h3>
      <p>

      </p>
          <p>
            Planilla de excel para anotar las ventas ¡Olvídalo!
          </p>

          <p>
           Un  <span class="font-secondary helper-aumenta-texto"> easy </span> camino para ahorra tiempo y dinero es usar nuestro módulo de mebresías. Te permitimos:
          </p>

          <ul>
                <li>Manejo de membresías sin límite de asistencia (un pase libre).</li>
                <li>Manejo de membresías con límite de asistencia (una cuponera).</li>
                <li>Renovaciones automáticas de mebresías.</li>

          </ul>

          <p>
            Nuestro sistema te permite tener la información justa, cuando la necesitas y donde la necesitas, lo que se traduce en una mayor productividad para la administración de tu gimnasio.
          </p>
          <p>
              Vive la vida y dejá las aburridas tareas administrativas para las computadoras 😉
          </p>

          <div class="mt-2">
             <a href="{{route('get_hablemos')}}" class="btn btn-primary  cursor-pointer text-white"> Agendar una demo</a>
          </div>

      </template>


    </section-card>

    <section-card
      titulo_aclarador="Asistencia a clases por agenda"
      titulo=""
      background=""

      order="right"
      :con_parte_oculta="false"
      url_img_chica="{{url()}}/imagenes/Drwas/reservas.png"
      url_img_grande="{{url()}}/imagenes/Drwas/reservas.png" >

      <template slot="description-visible">
      <h3 class="mb-4">Reservas de clases online <span class="font-secondary helper-aumenta-texto"> easy </span> </h3>
      <p>

      </p>
          <p>
                ¿Tus clases tiene cupos limitados? ¿Estás organizando eso por whatsapp? ¡olvídalo!
          </p>

          <p>
                Automatizá este proceso con nuestro módulo de reservas online <span class="font-secondary helper-aumenta-texto"> easy </span> y no te estreses más organizando en el grupo de whatsapp
          </p>

          <div class="mt-2">
             <a href="{{route('get_hablemos')}}" class="btn btn-primary  cursor-pointer text-white"> Agendar una demo</a>
          </div>





      </template>


    </section-card>

    <section-card
      titulo_aclarador="Control de ingresos y egresos"
      titulo=""
      background=""

      order="left"
      :con_parte_oculta="false"
      url_img_chica="{{url()}}/imagenes/Drwas/finanzas.png"
      url_img_grande="{{url()}}/imagenes/Drwas/finanzas.png" >

      <template slot="description-visible">
      <h3 class="mb-4">Finanzas <span class="font-secondary helper-aumenta-texto"> easy </span> </h3>
      <p>

      </p>
          <p>
              ¿En qué gastás? ¿Cuánto vendés? Contate la verdad llevando tus finanzas de manera <span class="font-secondary helper-aumenta-texto"> easy</span>.
          </p>

          <p>
              Usando  <span class="font-secondary helper-aumenta-texto"> easy</span>socio tendrás toda la información de tu empresa sin tener que preocuparte de hacer los molestos balances mensuales.
          </p>

          <p>
              Divertite haciendo las cosas que te gustan y delegá en  <span class="font-secondary helper-aumenta-texto"> easy</span>socio aquellas tareas que no te gustan.
          </p>

          <div class="mt-2">
             <a href="{{route('get_hablemos')}}" class="btn btn-primary  cursor-pointer text-white"> Agendar una demo</a>
          </div>





      </template>


    </section-card>

    <section-card
      titulo_aclarador="Control de acceso"
      titulo=""
      background=""

      order="right"
      :con_parte_oculta="false"
      url_img_chica="{{url()}}/imagenes/Drwas/control.png"
      url_img_grande="{{url()}}/imagenes/Drwas/control.png" >

      <template slot="description-visible">
      <h3 class="mb-4"> ¿Quién puede acceder?  <span class="font-secondary helper-aumenta-texto"> easy </span> </h3>

          <p>
              ¿Te gusta tener que decirle a alguien que debe dinero? ¡Claro que no!
          </p>
          <p>
              Dejá  está tarea en nuestras manos 😉. Cada vez que alguien entre a tu negocio le informaremos sobre el estado de su mebresía. En el caso de que ya tenga vencida la mebresía emitiremos una alerta para que veas que pasó.
          </p>



          <div class="mt-2">
             <a href="{{route('get_hablemos')}}" class="btn btn-primary  cursor-pointer text-white"> Agendar una demo</a>
          </div>





      </template>


    </section-card>






























@stop
