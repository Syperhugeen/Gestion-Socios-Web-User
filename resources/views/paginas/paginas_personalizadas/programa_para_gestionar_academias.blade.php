@extends('layouts.credo.layout_pricnipal')





{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}

{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}

{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_programa_para_gestionar_academias_de_baile') /*--}}

@section('og-tags')
 <meta property="og:type"               content="website" />
 <meta property="og:title"              content="{{ $Titulo}} " />
 <meta property="og:description"        content="{{$DescriptionEtiqueta}}" />
 <meta property="og:image"             content="{{$ImagenParaTaG }}" />
 <meta property="og:image:secure_url"  content="{{$ImagenParaTaG }}" /> 
 <meta property="og:image:width" content="250">
 <meta property="og:image:height" content="250">


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
@include('paginas.home.vue.access-devices')
  @include('paginas.home.vue.header-component')
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
 @include('paginas.Estructura_partes.Header.header_easy_socio')
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

    <section class="site-section pb-5" id="pregunta-aclaracion">
        <div class="container">
          <div class="row">
      <div class="col-12 mb-5 position-relative">
              <p class="text-center mb-3">¿Tienes una escuela de baile, cuentas con socios y estás en el punto en que te resulta difícil saber quién te debe o quién está al día? </p>
              <p class="text-center"><strong>¿Te resulta familiar esto?</strong>  ¿Te gustaría una herramienta fácil de usar que <strong> te ayude con la administración de tu academia a un precio mínimo</strong>? 
              </p>
              <p class="text-center">
                <strong>¡Te invito a que conozcas Easysocio! </strong>  
              </p>
            </div>
          </div>
        </div>
    </section>






  <div  class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">Dale valor a tu emprendimiento sin gastar más tiempo y energía en detalles de gestión </h2>
            
          <p>Hoy en día las academias de baile  son emprendimientos en auge, buscando mejorar la calidad de vida de las personas de todas las edades, haciendo que se mantengan en forma y se diviertan. Bailar es una de las formas que realmente pueden iluminar las vidas monótonas de las personas. Si tú ya tienes una escuela de danzas, sólo te hace falta una herramienta que te ayude con la parte de administración y la gestión, para que puedas dedicarte de lleno a eso que le da valor a tu emprendimiento.
          </p>   
          <p>
            Te voy a contar un poco más sobre de qué trata EasySocio el software para administrar  academias de baile más simple que hayas conocido. El gran valor de <strong>EasySocio es su facilidad de uso</strong>, brindando las funcionalidades justas y necesarias para que la administración de tu centro de danzas no sea un dolor de cabeza o te insuma mucha energía. A continuación te cuento los beneficios y las funcionalidades que EasySocio te brinda para darte una mano con todo eso <strong><a href="#Ventadtajas-1">Más información</a></strong> 
          </p>

         





          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg" alt="EasySocio el software para administrar gimnasios, academias de baile, institutos de inlges, academía de choferes y mucho mucho más.">
          </div>
        </div>
      </div>
    </div>













    <div  class="site-section" id="Ventadtajas-1">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">EasySocio está en la nube</h2>
          <p>Lo primero que tienes que saber es que Easysocio se encuentra alojado en la nube. ¿Qué ventajas brinda? Para empezar <strong>no necesitas instalar el software en tu computadora</strong>  (con el problema que trae el cambiar de computadora o el espacio en disco limitado). Tan solo con abrir el navegador (Google Chrome,Firefox, Internet Explorer, o similar ) e ingresar al programa a través de un enlace ya puedes comenzar (similar a cuando entras a Facebook desde una computadora). <strong>La gran ventaja de esto es que puedes acceder desde cualquier computadora</strong>  (de escritorio o portátil), <strong>sea que estés en tu escuela de baile, en tu casa, o en China</strong> .
          </p>
          <p>  
          Al estar en la nube tampoco <strong>necesitas preocuparte con el espacio en disco y el respaldo de los datos</strong>. Podrás acceder a ellos en cualquier momento. Así que si se rompe tu computadora, simplemente puedes usar otra para acceder al programa y todo estará tal cual lo dejaste la última vez. 
          </p>  
          <p>  
          Ya no es necesario dedicar varios días a actualizar las aplicaciones, con Easysocio las actualizaciones <strong>son automáticas y seguras</strong> . <strong>No debes comprar la última versión del software, parches o actualizaciones</strong> . Con el Easysocio en la nube,  ¡no tienes que hacer nada extra!
  
          </p>  

          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/programa-para-administrar-socios-en-la-nube.jpg" alt="Easysocio está en la nube. Por esa razon podrás acceder a los datos desde cualquier equipo, y no tendrás que preocuparte por actualizar ni pagar por las mejoras.">
          </div>
        </div>
      </div>
    </div>

    <div  class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">Simplicidad de uso</h2>
          <p>
             Tener <strong>la información justa y necesaria te ofrecerá mucha más productividad a la hora de administrar tu academia de baile</strong>. Tener un software <strong>simple, rápido y fácil de usar te permite explicarle a tu abuela/o cómo utilizarlo</strong> y que te ayude con el negocio.
          </p>
          <p>
             <strong>(1)</strong>  - Gran parte de la información que necesitas se despliega la pantalla de inicio, pero a un click de distancia podrás obtener aún más detalles. 
          </p>  
          <p>
             <strong>(2)</strong> - En el listado de la captura podrás observar si el socio tiene algún plan/paqueteo contratado y la fecha de vencimiento <strong>(3) </strong>
          </p> 
          <p>
             <strong>(4)</strong> - Haciendo click en el número de celular del socio podrás enviar un mensaje por Whatsapp automáticamente sin necesidad de agendar el contacto.  
          </p> 
          <p>
              <strong>(5)</strong> - Si en tu academia tienes la modalidad vender cuponeras de clases, Easysocio te permitirá gestionarlas de forma muy fácil. Podrás vender clases con vencimiento y con un simple click indicar cuando se utilizó/consumió. 
          </p>   
          <p>
            
             <strong>(6)</strong>  - De forma muy accesible tendrás la información para saber cómo está el estado de cuenta de tu socio. 
          </p>       
          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/vista-del-listado-de-easysocio-de-los-socios.jpg" alt="Lo mejor de Easysocio es su simplicidad de uso, realemnte tendrás la información que mas necesitás. "> 
          </div>
        </div>
      </div>
    </div>

   <div  class="site-section" >
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">Software con estado de cuenta integrado</h2>
           <p>Tener cuentas corrientes asociada a cada socio (cliente) optimiza la gestión de tu emprendimiento, es fundamental tener esta información accesible. Podrás registrar movimientos de ventas de servicios así como otros gastos, por ejemplo: la venta de algún producto o indumentaria. <strong>Siempre sabrás exactamente lo que ha contratado/comprado, si tiene algún saldo pendiente de pagar o si está al día</strong>. 
          </p>             
          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/estado-de-cuenta-de-programa-de-administracion-de-socio.jpg" alt="Este programa de administración tiene estado de cuenta incorporado, es decir, vas a poder saber en que han gastado tus socios y si están al día o no.">
          </div>
        </div>
      </div>
    </div>

    <div  class="site-section bg-light" >
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">         
          <h2 class="section-title mb-4">Movimientos de caja </h2>
          <p> Imagínate la siguiente situación: dejas a alguien a cargo de tu negocio. A primera hora de la mañana la caja cuenta con $2000. En el correr el día esa persona vende, cobra y paga ¿no crees que sería útil poder ver todos esos movimientos asociados con la persona que quedó a cargo del negocio? Luego podrías verificar que lo que hay en caja es consistente con todos los movimientos realizados durante el día. Bueno, este tipo de funcionalidades es una de las que te ofrece EasySocio.
          </p> 
          <p>
            <strong>Cada movimiento estará asociado al usuario que esté identificado en el sistema en ese momento</strong>. Siempre sabrás quién registró cada movimiento, y si pasan cosas “raras” sabrás con quién hablar. Otra característica de los movimientos de caja es que pueden ser <strong>multimoneda, quizás tengas productos que cobres en dólares y otros en pesos</strong>  (o tu moneda local). En cualquier caso, Easysocio ya contempla estas situaciones para que le puedas sacar el máximo provecho.


          </p>     
          <p>
            Si <strong>tu negocio cuenta con más de una sucursal</strong> , tendrás los movimientos de caja diferenciados para cada una de ellas. 
            Recuerda que podrás controlar los movimientos de cada sucursal sin importar dónde estés,<strong> gracias a que Easysocio está en la nube</strong> . 
          </p>        
          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
          <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/sistema-de-administración-con-movimientos-de-caja-multi-sucursal-y-multi-moneda.jpg" alt="Easysocio cuenta con movimientos de caja, sabrás de donde sale cada registro sea un ingres (venta) como un egreso (gasto). También sabrás que usuario(operador del sistema de administración)  fué el que lo registró. Es Multi moneda y multi sucursal. Todo para que le saques provecho y que tu gestión de negocio sea simple.
">
          </div>
        </div>
      </div>
    </div>
     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
        <img src="{{url()}}/imagenes/PaginasPersonalizadas/Academia/easy-socio-academia-de-baile-programa-de-administracion.jpg" class="imagen-medio-de-web">
        <div class="sub-contiene-texto-imagen-medio">
          <div class="contiene-texto-imagen-medio-texto">Easysocio se caracteriza por ser muy simple de entender y usar. De cualquier forma, estaremos a tu disposición para enseñarte paso a paso cómo usar el software, hasta que seas un experto. </div>
          <img class="contiene-texto-imagen-medio-logo" src="{{url()}}/imagenes/Empresa/logo-rectangular-easysocio-blanco.png" alt="Easysocio ptograma de gestion de gimasios y academias simple de usar.">
        </div>
      </div>

     <div  class="site-section">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">Renovación automática de planes </h2>
           <p> 
            Easysocio tiene la opción de que se pueda renovar automáticamente el servicio de caracter mensual comprado por el socio por última vez. Por ejemplo: si en tu escuela de baile se vende un servicio que se llama “pase libre” que se cobra por mes y un socio contrató este servicio el 01/05/2019, en la fecha de vencimiento (31/05/2019) el sistema renovará el pase libre creando otro servicio igual que vencerá el 30/06/2019. Esto hará que automáticamente se genere un movimiento de venta para ese socio el cual te pasará a deber el importe del servicio mensual renovado. En la imagen se ejemplifica esta funcionalidad. 
          </p>    
          <p>
            En base comentarios de varios dueños de gimnasios y academias, estoy convencido de que una herramienta de este tipo  debería tener lo justo y necesario para que las tareas de administrar el negocio sean lo más sencillas posibles. Cada funcionalidad que pensé para Easysocio es sometida previamente a esta pregunta: ¿aporta valor  o genera complejidad? Por esto es que estoy convencido que Easysocio tiene todo lo que necesitas de una forma muy simple.

          </p>         
          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/antes-y-despues-del-vencimiento-en-el-prgrama-de-administracion.jpg" alt="Antes y despues del vencimiento de un servicio. Easysocio te resume el trabajo automatizando este tipo de cosas. Programa para adminsitrar socios fácil de usar.">
          </div>
        </div> 
      </div>
    </div>
     <div  class="site-section bg-light">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">Capacitación</h2>
           <p> 
             Easysocio se caracteriza por ser muy simple de entender y usar. De cualquier forma, estaremos a tu disposición para enseñarte paso a paso cómo usar el software, hasta que seas un experto. 

          </p>    
             
          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/programa-para-gestionar-socios-entrenamiento-a-clientes.jpg" alt="Te voy a enseñar paso a paso a usar Easysocio. El programa más simple de usar a la hora de gestionar tu emprendimeinto de fitness o academía de baile">
          </div>
        </div> 
      </div>
    </div>
     <div  class="site-section">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">Soporte</h2>
           <p> 
            Tanto yo (como mi equipo de vendedores) estaremos a tu disposición para darte soporte cuando lo necesites. No solo me quedaré satisfecho con haberte enseñado a ser un verdadero experto usando EasySocio, sino que estaremos disponibles para asistirte cuando sea necesario.
          </p>    
                
          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/en-easy-socio-te-damos-soporte-simpre-estaré-ahí-para-darte-una-mano-con-la-tarea-de-administrar-negocio.jpg" alt="Te vamos a dar soporte ante cualquier duda sobre el uso de Easysocio. Vamos a estar ahí para cuando lo requieras">
          </div>
        </div> 
      </div>
    </div>




     <section class="site-section bg-light" id="precios-section">
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Planes y precios</h2>
            
          </div>

           <div class=" mb-5 mb-lg-0 get_width_100 flex-row-center flex-justifice-space-around  flex-wrap">
            @include('paginas.paginas_personalizadas.precios_programa_socios')
           </div>



          <div class="get_width_100 flex-row-center flex-justifice-space-around">
             <div class="Seccion_precio_aclaracion text-center">
                
                * Los precios están en pesos Uruguayos y no incluyen impuestos    
                <br>
                * Si no hay un plan que se ajuste a tu necesidad contáctame y lo vemos

                        
             </div>
          </div>
           
           

        </div>
      </div>
    </section>


    @include('paginas.noticias.blog_3_para_home_y_secciones') 




    

    

   


   



   

@stop


@section('rutas_de_interes')
<li><a href="#precios-section" >Precios y planes</a></li>
@stop