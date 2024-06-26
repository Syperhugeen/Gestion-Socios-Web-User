<!doctype html>
<html lang="es">
  <head>
    <title> @yield('title')  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.layout_partial_js_cdn_and_custom')
    @include('layouts.layout_partial_css')


    @yield('og-tags')
    @yield('data-estructurada')
    @yield('pixcel-facebook')
    @yield('favicon')

    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"WebApplication","name":"Easysocio","applicationCategory":"Gestión","aggregateRating":{"@type":"AggregateRating","ratingValue":4.9,"ratingCount":11863}}</script>

    <meta name="facebook-domain-verification" content="20ezzwn14s6bw0rp4q3711awjo32zc" />
    <meta name="Description" CONTENT="@yield('MetaContent')">
    <META name="robots" content="@yield('MetaRobot')">
    <meta name="Keywords"  content="@yield('palabras-claves')">

    @include('paginas.comunes.analytics')

    @yield('head-custome')

  </head>
  <body >



  <div id="app" class="site-wrap">


     @include('layouts.cargador-conv-if-y-style')
     @yield('header')
     @yield('contenido')
     @yield('footer')
  </div>



   @include('layouts.layout_partial_vue')
  </body>
</html>
