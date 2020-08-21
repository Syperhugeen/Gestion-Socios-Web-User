@extends('layouts.credo.layout_pricnipal')




{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/mauricio-costanzo-desarrollador-prgramador.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_de_web_profesionales') /*--}}

@section('og-tags')
 <meta property="og:type"               content="website" />
 <meta property="og:title"              content="{{ $Titulo}} " />
 <meta property="og:description"        content="{{$DescriptionEtiqueta}}" />
 <meta property="og:image"              content="{{$ImagenParaTaG }}" />
 <meta property="og:image:secure_url"   content="{{$ImagenParaTaG }}" /> 
 <meta property="og:image:width"        content="250">
 <meta property="og:image:height"       content="250">


@stop 

@section('pixcel-facebook')
<!-- Facebook Pixel Code -->
{{-- <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '211354400244020');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=211354400244020&ev=PageView&noscript=1"
/></noscript> --}}
<!-- End Facebook Pixel Code -->

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


@section('vue')
  @include('paginas.home.vue.header-component')
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop


@section('header')
 @include('paginas.Estructura_partes.Header.header_comun')
@stop   

@section('footer')
 @include('paginas.Estructura_partes.Footer.Footer')
@stop


@section('contenido')
   
    {{--*/  $Portada   =  $Portada /*--}}
    {{--*/  $Route     = '' /*--}}
    {{--*/ $EsPortada  = true /*--}}
    @include('paginas.paginas_personalizadas.partials.portada_molde') 
    <span id="header-llamado-a-la-accion"></span>






  <div  class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">La carta de presentación del profesional </h2>
          <p><strong>¿Tu objetivo es aumentar tus ventas?, ¿conseguir nuevos clientes?, ¿dar a conocer tus talentos al mundo?, ¿te gustaría convertirte en un candidato muchos más cotizado a la hora de buscar un nuevo trabajo?</strong>  estás en la página correcta!, aquí te voy a ofrecerte un plan, para que puedas cumplir con esos objetivos.
          </p>   

          <p>Lo primero que tienes que saber es que tener un página web <strong> te va a ayudar a centralizar toda la información con respecto a ti</strong> va ser como  <strong>tu curriculum vitae pero mostrado de una forma super linda e inteligente</strong> . Podrás incluir por ejemplo <strong>todos tus datos de contacto y redes sociales, podrás contarnos quién eres y en qué eres bueno/a, vas a poder exponer toda tu experiencia como profesional</strong> . 
          </p> 

          <p>
            En el momento en el que te decidas por una página web como tu carta de presentación ante el mundo,  debes saber cómo están hechas, cuáles son sus beneficios y las funcionalidades que te ofrece para ayudarte a destacar como profesional . <strong><a href="#about-responsive">Más información</a></strong>
          </p>





          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/pagina-web-como-carta-de-presentación-es-tu-cuuriculumn-vita.jpg" alt="Podrás contar toda tu trayectoría personal. Tal cual lo haces en tu curriculumn vita pero la información estára organizada de un manera mucho más lindo e inteligente.">
          </div>
        </div>
      </div>
    </div>


     @include('paginas.paginas_personalizadas.partial_caracteristicas_paginas_web')

     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
        <img src="{{url()}}/imagenes/PaginasPersonalizadas/paginas-webs-mauricio-costanzo-responsive.jpg" class="imagen-medio-de-web">
        <div class="sub-contiene-texto-imagen-medio">
          <div class="contiene-texto-imagen-medio-texto">Tu pagina web será tu carta de presentación ante el mundo.  </div>
          
        </div>
      </div>




    

    @include('paginas.noticias.blog_3_para_home_y_secciones') 

@stop
