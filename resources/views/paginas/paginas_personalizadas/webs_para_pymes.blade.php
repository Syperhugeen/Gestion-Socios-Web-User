@extends('layouts.credo.layout_pricnipal')




{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/mauricio-costanzo-desarrollador-prgramador.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_de_web_para_pymes') /*--}}

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
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">Una página web es la vidriera perfecta para tu PyMes  </h2>
          <p>Un sitio web es algo muy importante, seas un emprendedor que recién comienza, seas una empresa pequeña o una gran empresa, o si tu mercado es global o local: <strong>contar con una página web te permitirá dar a conocer tus beneficios de forma masiva y de forma muy simple</strong>.
          </p>   

          <p><strong>¿Tu objetivo es aumentar las ventas de tu negocio? ¿Conseguir nuevos clientes? ¿Mejorar la imagen de tu empresa? </strong>  todo esto lo puedes lograr con una página web. 
          </p> 

          <p>
            Una página web <strong>te genera visibilidad</strong> , es decir estará disponible las 24hs los 365 del año. Cuando alguien escuche algo de tu negocio, es muy probable que lo primero que haga sea buscarlo en internet. 
          </p>

          <p>
            Un <strong>sitio web te genera buena imagen</strong> . Si la web esta bien diseñada y cuenta con contenido atractivo te generará buena imagen. 
          </p>

          <p>
            <strong>Llegarás a un público que antes no</strong> , y esto se traduce en nuevas oportunidades de venta. 
          </p>

          <p>
            <strong>Podrás mantener actualizado a tus clientes</strong> , sobre los nuevos productos, servicios o beneficios que lances. 

          </p>

          

          <p>
            En el momento en el que te decidas por una página web como vidriera ante el mundo, <strong>debes saber cómo están hechas, cuáles son sus beneficios y las funcionalidades que te ofrece para ayudarte a destacar en el mundo digital de internet</strong> . 
          </p>

          
           <a href="{{route('get_pagina_contacto','Web')}}" class="Boton-Primario-Relleno Boton-Fuente-Chico mb-3 mt-3">
           Pedí presupuesto ahora mismo <i class="fas fa-chevron-right"></i>
           </a>
          





          </div>
          <div v-lazy-container="{ selector: 'img' }" class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/PaginasPersonalizadas/pagina-web-la-vidriera-de-la-pymes.jpg" alt="Estoy convencido de que tener un sitio web es algo muy importante, seas un emprendedor que recién comienza, seas una empresa pequeña o una gran empresa, o si tu mercado es global o local: contar con una página web te permitirá dar a conocer tus beneficios de forma masiva y de forma muy simple.">
          </div>
        </div>
      </div>
    </div>


      @include('paginas.paginas_personalizadas.partial_caracteristicas_paginas_web')

      {{-- Imagen con logo para mostrar por el medio --}}
      <div v-lazy-container="{ selector: 'img' }" class="contiene-todo-image-centrada">
        <img data-src="{{url()}}/imagenes/PaginasPersonalizadas/paginas-webs-mauricio-costanzo-responsive.jpg" class="imagen-medio-de-web">
        <div class="sub-contiene-texto-imagen-medio">
          <div class="contiene-texto-imagen-medio-texto">Tu página web será tu carta de presentación ante el mundo.  </div>
          
        </div>
      </div>
   

    
@include('paginas.noticias.blog_3_para_home_y_secciones') 

@stop