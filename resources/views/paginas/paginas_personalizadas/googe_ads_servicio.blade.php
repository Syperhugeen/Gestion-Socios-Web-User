@extends('layouts.credo.layout_pricnipal')

{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/mauricio-costanzo-desarrollador-prgramador.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_servicio_google_ads') /*--}}

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


    <div class="site-section background-gris-1">
        <div class="container">
          <h2 class="mb-4 sub-titulos-class text-center text-color-primary text-bold">
            Es hora de que pongas tu web en las primeras posiciones de Google
          </h2>
          <h3 class="sub-titulos-class text-center text-color-primary mb-4">
            La Campañas en Ads (antes llamado Google Adwords) cada vez funcionan mejor. Si quieres aparecer en los primeros resultados de Google de manera rápida contactate con nosotros para que analicemos tu proyecto y si ya lo has intentado tú para que optimizamos tu campaña.
          </h3>    
            
          
        </div>
      </div>
   








  <div  class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">¿Qué es Google Ads? </h2>
          <p>Es el sistema gracias al cual Google hace dinero. Básicamente Google te ofrece posicionarte de manera bien destacada para los términos de búsqueda que tú establezcas. Por ejemplo: si tienes un lavadero ubicado en Montevideo Uruguay, quizás te gustaría posicionarte para el término de búsqueda “lavaderos en Montevideo” , <strong>Google te cobrará solo si la persona hace click en el anuncio y la llevará a tu sitio web</strong>.   

          </p>   

          

          

          
          
          





          </div>
          <div v-lazy-container="{ selector: 'img' }"  class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/PaginasPersonalizadas/Campañas/logo-para-aparecer-primero-en-buscadores-logo-servicio-de-Mauricio-costanzo.jpg" alt="Destaca tu empresa apareciendo para los terminos de buscas que tengan que ver con tu producto o servicio. Mauricio Costanzo">
          </div>
        </div>
      </div>
    </div>




    <div class="site-section background-gris-0">
    <div class="container">
      <h2 class="mb-4 sub-titulos-class text-center text-color-primary text-bold">
        ¿Cuánto cuesta?
      </h2>
      <p class=" text-center  ">
        La Campañas en Ads (antes llamado Google Adwords) cada vez funcionan mejor. Si quieres aparecer en los primeros resultados de Google de manera rápida contactate con nosotros para que analicemos tu proyecto y si ya lo has intentado tú para que optimizamos tu campaña.
      </p>  
      <div class="row col-12 justify-content-center">


        <div class="col-md-6 col-lg-7 mt-5">
            <div v-lazy-container="{ selector: 'img' }"  class="servicio_lista service">
              
                <img data-src="{{url()}}/imagenes/PaginasPersonalizadas/Campañas/campaña-contacto-mauricio-costanzo.jpg" alt="Desarrollo de sitios web para empresas. Mauricio Costanzo" class="servicio_lista_imagen">
                           
              <div class="p-3 mt-2">
                <h3 class="sub-titulos-class text-bold text-center text-color-primary font-primary mb-5">
                  
                    Campañas en Google Ads
                                 
                </h3>
                <p class="color-text-gris mb-2 text-center">
                 Alta: <strong>U$S 100 + IVA</strong>  solo el primer mes
                </p>
                <p class="color-text-gris mb-2 text-center">
                 Gestión Campaña: <strong>U$S 50 + IVA</strong>  / mes
                </p>
                <p class="color-text-gris mb-5 text-center">
                  Inversión Total de clicks: <strong> a decidir por el cliente. Te asesoramos </strong>
                </p>

                <a class="Boton-Fuente-Chica Boton-Primario-Relleno mt-" href="{{route('get_pagina_contacto','ads')}}"> Contactar e impulsar tu web a las primeras posiciones de Google <i class="fas fa-angle-double-right"></i></a>
                               
              </div>
            </div>
          </div>
        
      </div>  
        
      
    </div>
  </div>
    
@include('paginas.noticias.blog_3_para_home_y_secciones') 

@stop