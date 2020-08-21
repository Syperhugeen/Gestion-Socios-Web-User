<!doctype html>
<html lang="es">
  <head>
    <title> @yield('title')  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('layouts.layout_partial_css')

    @yield('og-tags')
    @yield('data-estructurada')
    @yield('pixcel-facebook')

    <meta name="Description" CONTENT="@yield('MetaContent')">      
    <META name="robots" content="@yield('MetaRobot')">
    <meta name="Keywords"  content="@yield('palabras-claves')">
    @include('paginas.comunes.analytics')
    
  </head>
  <body  >
  


  <div id="app" class="site-wrap">
   <div v-if="cargando" class="contiene-cargador">
    <div class="cssload-container">
      <div class="cssload-tube-tunnel"></div>
    </div>
  </div>

  

    @yield('header')  
    @yield('contenido')


   



    <contacto-component :empresa="empresa" inline-template>
      <section class="site-section bg-primary" id="contact-section">
<div v-if="!se_envio" class="container">
  <div class="row">
    <div class="col-12 mb-5 position-relative">
      <h2 class="section-title text-center text-white mb-5">Contacto</h2>
    </div>
  </div>
  <div action="#" class="form">
    <div class="row mb-4">
      
      <div class="form-group col-12">
        <input v-model="name" type="text" class="form-control" placeholder="Nombre">
      </div>
    </div>

    <div class="row mb-4">
      <div class="form-group col-12">
        <input v-model="email" type="email" class="form-control" placeholder="Email ">
      </div>
    </div>
   
    <div class="row mb-4">
      <div class="form-group col-12">
        <textarea v-model="mensaje" cols="30" rows="10" class="form-control" placeholder="Escribe"></textarea>
      </div>
    </div>

    <div class="row">

      <div v-if="errores" >
        <div v-for="error in errores">@{{error}}</div>
      </div>

      <div class="col-md-6">
        <input type="submit" class="btn btn-dark" v-on:click="enviarMensaje" value="Enviar mensaje">
      </div>
    </div>
    
  </div>
</div>
<div v-else class="section-title text-center text-white mb-5">
  <h2 class="section-title text-center text-white mb-5">@{{mensaje_se_envio}}</h2>
</div>
    


</section>

    </contacto-component>



    @if($Empresa->whatsapp_empresa != 'no')
    <div class="site-section flex-row-column">      
      @include('paginas.home.whatasapp_contacto_mensaje')
    </div>
    @endif



    @include('paginas.Estructura_partes.Footer.Footer')

  </div> 

  <!-- .site-wrap -->

 <script src="{{url()}}{{ elixir('js/credo.js')}} " ></script>   


  @if(Auth::guest())
             <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
  @else
      @if(Auth::user()->role ==='adminMcos522')
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script> 
      @else
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
      @endif
  @endif

  @yield('vue-componenetes-cdn')


  <script type="text/javascript">
    @yield('vue-componenetes-externos')
    @include('paginas.home.vue.VueLazyload')
    @yield('vue')  
  </script>


  
  </body>
</html> 