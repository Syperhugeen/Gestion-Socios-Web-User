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



<portada altura_portada="50">
  <template slot="titulo">
    <h1 class="text-white mb-5">
      Precio de software para
      <slider-text
        :data="[
         {name:'gimnasios'},
         {name:'box funcionales'},

{name:'escuelas de danza',url:'https://mwebs.com.uy/programa-para-administrar-academias-de-baile-online'},
{name:'box de crossfit'},
{name:'academía de artes marciales'}

]"
      ></slider-text>
    </h1>
    <a href="#intro" class="btn btn-outline-light cursor-pointer">
      Ver precios</a
    >
  </template>
  <template slot="descripcion">


    <img
      class="d-none d-lg-block center-absolute"
      style="width: 600px"
      src="{{url()}}/imagenes/Easysocio/Capturas/socios-listado-notebook.png"
      alt=""
    />
  </template>
</portada>


      <span id="intro"></span>














    @include('paginas.paginas_personalizadas.planes')


















@stop
