@extends('layouts.credo.layout_pricnipal')



{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/pagina-web-prefesionales.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/mauricio-costanzo-desarrollador-prgramador.jpg'/*--}}
{{--*/ $Titulo                = 'Contactanos ahora para probar EasySocio' /*--}}
{{--*/ $DescriptionEtiqueta   = 'El mejor programa para gestionar gimnasios.
 ' /*--}}
{{--*/ $PalabrasClaves        = 'EasySocio Uruguay' /*--}}
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

@section('vue-componenetes-cdn')
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>
  
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
    <div class="site-blocks-cover overlay bg-light" id="home-section">
      <div class="container position-relative">
         <div class="row justify-content-center">

          <div class="col-md-12 mt-lg-6 align-self-center text-intro">
            <div class="row justify-content-end">
              <div class="col-10 col-lg-5">
                <img class="mb-4 img-fluid p-3" src="{{url()}}/imagenes/Empresa/logo-rectangular-easysocio-blanco.png" alt="Easysocio ptograma de gestion de gimasios y academias simple de usar.">
                <h1  class="text-white titulos-class text-right"> Pide la prueba gratis ahora </h1>                
                <p class="lead text-right">Para pedir prueba gratis o enviar una consulta rellenar el formulario de aquí abajo</p>
                <p>
                  <a href="#formulario_contacto" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chico scroll-to">Ir a rellenar el formulario <i class="fas fa-chevron-right"></i></a>
                </p>
              </div>
            </div>
          </div>
            
        </div>
        
        
      </div>
      
       <img class="post-img-slider-size Slider_cabecer_img" style="position: absolute;top: 0;" src="{{url()}}/imagenes/Easysocio/Easysocio-software-para-administrar-gimnasisos-contacto.jpg" alt="Contaco EasySocio. Software simple de usar para gestionar tu gimnasio, centro de fitness, box de crossfit o entrenamiento funcional"> 
       

    </div>  

   



    <div  class="site-section" id="formulario">
      <div class="container">
        <div class="d-flex  flex-column align-items-center justify-content-center">

            @include('paginas.home.vue.Contacto.PartialTopDeFormulario')
          
          <div class="col-lg-6 " id="formulario_contacto">

                
              
                

               <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
                
                 @include('paginas.home.vue.Contacto.Contacto_completo_easy_socio')
               
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