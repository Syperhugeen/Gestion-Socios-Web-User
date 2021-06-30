@extends('layouts.credo.layout_pricnipal')




{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = 'Software para gimnasios, gym software' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_precios') /*--}}

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
                 Precio de software para  <slider-text :data="[
                 {name:'gimnasios'},
                 {name:'box funcionales'},

{name:'escuelas de danza',url:'https://mwebs.com.uy/programa-para-administrar-academias-de-baile-online'},
{name:'box de crossfit'},
{name:'academía de artes marciales'}

]"></slider-text>
              </h1>
            </template>
            <template slot="descripcion">

               <a href="#intro" class="btn  btn-outline-light cursor-pointer"> Ver precios</a>

               <img class="d-none d-lg-block " style="position: absolute; right:0; top:30%; height:auto; width:600px;"  src="{{url()}}/imagenes/Easysocio/Capturas/socios-listado-notebook.png" alt="">

            </template>







        </portada>

      <span id="intro"></span>



      <section class="site-section pb-5 background-gris-1" >
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

              <h2 class="sub-titulos-class mb-4 text-center text-color-primary"> Software que te lo hace  <span class="font-secondary helper-aumenta-texto">easy  </span> </h2>
              <p class="text-center mb-0">Te ofrecemos mucho más que un sistema contable para <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-administrar-un-gimnasio:-6-consejos-para-que-lo-hagas-bien/24"> administrar tu gimnasio</a>. Se trata de un conjunto de utilidades que te permitirán brindar un óptimo servicio para tus clientes al tiempo que hace que tu trabajo sea   <span class="font-secondary helper-aumenta-texto">easy </span>.
              </p>

            </div>
          </div>
        </div>
    </section>











    @include('paginas.paginas_personalizadas.planes')


















@stop
