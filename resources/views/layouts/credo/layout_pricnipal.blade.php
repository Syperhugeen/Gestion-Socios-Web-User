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

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1289810099135333');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1289810099135333&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

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
