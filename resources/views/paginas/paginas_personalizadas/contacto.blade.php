@extends('layouts.credo.layout_pricnipal')



{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/pagina-web-prefesionales.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/mauricio-costanzo-desarrollador-prgramador.jpg'/*--}}
{{--*/ $Titulo                = 'Contacto | Mauricio Costanzo | desarrollador de páginas webs ' /*--}}
{{--*/ $DescriptionEtiqueta   = 'Se lo importante que es estar por crear tu idea en software web, por esa razón me pondré en modo ninja y te daré la mejor atención.
 ' /*--}}
{{--*/ $PalabrasClaves        = 'Se lo importante que es estar por crear tu idea en software web, por esa razón me pondré en modo ninja y te daré la mejor atención.' /*--}}
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


@section('contenido')

@if($tipo == 'ads')

<div class="site-blocks-cover overlay background_img contacto_imagene_ads_portada" >

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-12 mt-lg-6 align-self-center text-intro">
            <div class="row justify-content-start">
              <div class="col-10 col-lg-5">
                <h1  class="text-white titulos-class">Aparecer en Google </h1>                
                <p class="text-white">Para contactarnos o contratar el servicio de campañas de Google ads completa el formulario que está aquí abajo.</p>                
              </div>
            </div>
          </div>
            
        </div>
      </div>
</div> 

@else
    <div class="site-blocks-cover overlay background_img contacto_imagene_portada" >

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-12 mt-lg-6 align-self-center text-intro">
            <div class="row justify-content-end">
              <div class="col-10 col-lg-5">
                <h1  class="text-white titulos-class text-right">Contáctate ahora mismo </h1>                
                <p class="lead text-right">Para contactarnos completa el formulario que esta aquí abajo.Tu mensaje lo recibirá un ninja de la atención comercial.</p>
                <p>
                  <a href="#formulario_contacto" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chico scroll-to">Ir a rellenar el formulario <i class="fas fa-chevron-right"></i></a>

                </p>
              </div>
            </div>
          </div>
            
        </div>
      </div>
      </div> 

      
@endif      
      
      
     

   



    <div  class="site-section" id="formulario">
      <div class="container">
        <div class="d-flex  flex-column align-items-center justify-content-center">


          @include('paginas.home.vue.Contacto.PartialTopDeFormulario')
         
         
          
          <div class="col-lg-6  " id="formulario_contacto">

                
              
                

               <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
                @if($tipo == 'Web')
                 @include('paginas.home.vue.Contacto.Contacto_completo_para_contacto')

                @elseif($tipo == 'ads') 
                  @include('paginas.home.vue.Contacto.Contacto_ads')
                @else
                 @include('paginas.home.vue.Contacto.Contacto_comun')
                @endif 
               </contacto-component>


            
            
            
          </div>
          {{-- <div class="col-lg-6 order-1 pl-lg-5 order-lg-1">

            <div class="row align-items-center justify-content-center">
            <img class="rounded-circle mb-4  imagen-contacto" src="{{url()}}/imagenes/Contacto/mauricio-costanzo-atención-comercial-por-desarrollo-páginas-web-software.jpg" alt="Image">
            <p class="color-text-gris col-10 col-lg-10 text-center">Para contactarnos rellena el formulario. Tu mensaje lo recibirá un ninja de la atención comercial.</p>
            </div>

                    
           
          </div> --}}
          
        </div>
      </div>
    </div>

   

    

    

   


   

    

   

@stop  


