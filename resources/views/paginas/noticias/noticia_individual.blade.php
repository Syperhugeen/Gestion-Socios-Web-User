@extends('layouts.credo.layout_pricnipal')




@section('favicon')
 <link rel="shortcut icon" href="{{ asset('imagenes/favicon-easy.ico') }}">
@stop

@section('og-tags')
  <meta property="og:url"                content="{{$Noticia->route}}" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="{{ $Noticia->name}}" />
  <meta property="og:description"        content="
   {{$Noticia->descripcion_breve}} | {{$Empresa->name}}." />
   <meta property="og:image"               content="{{$Noticia->url_img_foto_principal_chica}}" />
   <meta property="og:image:secure_url"  content="{{$Noticia->url_img_foto_principal_chica}}" />
   <meta property="og:image:alt"         content="{{$Noticia->name}} |  {{$Empresa->name}}" />
   <meta property="og:image:width" content="350">
   <meta property="og:image:height" content="350">
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
            "@id": "{{$Noticia->route}}",
            "name": "{{$Noticia->name}}"
            }
          }
         ]
        }
</script>

<script type="application/ld+json">

{ "@context": "https://schema.org",
 "@type": "BlogPosting",
 "headline": "{{$Noticia->name}}",
 "alternativeHeadline": "{{$Noticia->title_tag}}",
 "image": "{{$Noticia->url_img_foto_principal_chica}}",
 "keywords": "{{$Noticia->tags}}",
 "publisher":{
    "@type": "Organization",
    "name": "M webs",
    "logo": {
      "@type": "ImageObject",
      "url": "{{url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'}}"
    }
  },
 "url": "{{$Noticia->route}}",
 "datePublished": "{{$Noticia->created_at}}",
 "dateCreated": "{{$Noticia->created_at}}",
 "dateModified": "{{$Noticia->updated_at}}",
 "description": "{{$Noticia->descripcion_breve}}",
   "author": {
    "@type": "Person",
    "name": "Mauricio Costanzo"
  }
 }


</script>


@stop

@section('head-custome')

@include('paginas.adsens.general_code')

  {{--  A g r e g o   c d n   d e l   p l u g   d e l   c ó d i g o   h i g h l i g h t --}}
 <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.0/styles/a11y-dark.min.css">
 <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.0/highlight.min.js"></script>
 <script>hljs.initHighlightingOnLoad();</script>
@stop


@section('title')
  {{ $Noticia->titulo_de_la_pagina}}
@stop


@section('MetaContent')
 {{$Noticia->description_de_la_pagina}}
@stop

@section('MetaRobot')
  index,follow
@stop

@section('palabras-claves')

@stop

@section('vue-componenetes-cdn')
<script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
@stop

@section('vue')
  @include('paginas.home.vue.baner-newsletter')
  @include('paginas.home.vue.publicidad')
  @include('paginas.home.vue.indice')
  @include('paginas.home.vue.header-component')
  @include('paginas.home.vue.vue-instance')














@stop

@section('header')
@include('paginas.Estructura_partes.Header.header_comun')
@stop

@section('footer')
 @include('paginas.Estructura_partes.Footer.Footer')
@stop

@section('iconos-compartir')



 <div   class="get_width_100 contenedor-iconos-share">


 <div class="flex-row-center sub-contenedor-iconos-share">

    <div class="iconos-share-titulo"><i class="fas fa-share-alt"></i> Compartir</div>


    {{-- //whatzap icono --}}
    <a class="iconos-share-formato mostrar-solo-mobil" href="whatsapp://send?text={{$Noticia->route}}" data-action="share/whatsapp/share">
            <i class="fab fa-whatsapp-square"></i>
    </a>


    <a class="iconos-share-formato" href="http://facebook.com/sharer.php?u={{$Noticia->route}}">
            <i class="fab fa-facebook"></i>
    </a>

    <a class="iconos-share-formato" href="https://www.linkedin.com/shareArticle?url={{$Noticia->route}}">
            <i class="fab fa-linkedin"></i>
    </a>

    <a class="iconos-share-formato" href="https://twitter.com/?status=Me gusta esta página {{$Noticia->route}}">
            <i class="fab fa-twitter-square"></i>
    </a>

 </div>



</div>

@stop





@section('contenido')

<div
  v-lazy-container="{ selector: 'img' }"
  class="blog-portada-contenedor"
  id="home-section"
>
  <img
    v-if="mostrar_para_celuar"
    class="blog-img-slider-size"
    style="position: absolute; top: 0"
    data-src="{{$Noticia->url_img_foto_principal_chica}}"
    alt="{{$Noticia->descripcion_breve}}. {{$Noticia->name}}"
  />
  <img
    v-else
    class="blog-img-slider-size"
    style="position: absolute; top: 0"
    data-src="{{$Noticia->url_img_foto_principal}}"
    alt="{{$Noticia->descripcion_breve}}. {{$Noticia->name}}"
  />
</div>

<baner-newsletter
  titulo="Suscríbete a nuestro newsletter para recibir novedades, estrategias y soluciones para tu emprendimiento de fitness."
></baner-newsletter>

<div class="conenedor-maximo-blog">
  {{-- Contenido del blog --}}
  <div v-lazy-container="{ selector: 'img' }" class="contenedor-blog">
    {!! $Noticia->contenido_render !!}
  </div>

  <div class="wraper-secciones-blog-titulo-content">
    <div class="contiene-otras-secciones-del-blog">
      <publicidad
        titulo="Software en la nube para gimnasios"
        descripcion="El programa para administrar gimnasios más simple de usar"
        url="https://gestionsocios.com.uy/"
        url_img_chica="https://gestionsocios.com.uy/imagenes/baner/easysocio-imagen-chica.jpg"
        url_img_grande="https://gestionsocios.com.uy/imagenes/baner/easysocio-imagen-grande.jpg"
        call_to_action="Concer más sobre Easysocio"
      >
      </publicidad>
    </div>
  </div>





  {{-- Sobre el autor --}}
  <div
    v-lazy-container="{ selector: 'img' }"
    class="wraper-secciones-blog-titulo-content"
  >
    <div class="wrpaer-titulo-de-seccion">Sobre el autor</div>
    <div class="contiene-otras-secciones-del-blog">
      @include('paginas.noticias.sobre_el_autor')
    </div>
  </div>

  {{-- Blog relacionados --}} @if($blogs_relacionados->count() > 0)
  <div class="wraper-secciones-blog-titulo-content">
    <div class="wrpaer-titulo-de-seccion">Artículos relacionados</div>

    @include('paginas.noticias.blogs_relacionados')
  </div>
  @endif
</div>


@stop
