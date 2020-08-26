@extends('layouts.credo.layout_pricnipal')




{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = 'desarrollador web, programador web, diseñador de paginas web, diseño de webs, paginas webs' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}

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



@section('vue')   
   @include('paginas.home.vue.header-component')
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

      <span id="intro"></span>
      <span id="header-llamado-a-la-accion"></span> 

    <section class="site-section pb-5" id="pregunta-aclaracion">
        <div class="container">
          <div class="row">
      <div class="col-12 mb-5 position-relative">

              <h2 class="sub-titulos-class mb-2 text-center text-color-primary">EasySocio el Software para la gestión de gimnasios</h2>
              <p class="text-center mb-0">EasySocio es una plataforma digital que te ofrece mucho más que un sistema contable para administrar tu gimnasio. Se trata de un conjunto de utilidades que te permitirán brindar un óptimo servicio para tus clientes al tiempo que facilita tu trabajo para que lo realices de manera rápida y sencilla.
              </p>
             
            </div>
          </div>
        </div>
    </section> 


  <div  class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">¿Tienes un gimnasio y te encuentras en el punto que la gestión de sus socios se hace complicada?</h2>
            
          <p>En la industria de los negocios de acondicionamiento físico, es normal que en la medida en que comienza a crecer el volumen de clientes, cada vez se haga más difícil mantener al día los estados de cuentas de cada uno. Puede llegar a ocurrir que si son muchos no sepas distinguir quienes se encuentran al día con sus pagos y quienes te deben dinero. Si esta situación te resulta familiar haz encontrado la herramienta que necesitas para solucionar tus problemas de administración de forma sencilla y por una inversión mínima. Te invitamos a conocer EasySocio.
          </p>   
          <p>
            Esta tecnología te permite como administrador de uno o varios gimnasios saber cuál es el estado financiero del negocio en tiempo real, desde cualquier ubicación a través de un dispositivo móvil como un celular o tu laptop. Además podrás obtener información valiosa sobre las estadísticas de los servicios más utilizados por los clientes, las tendencias en cuanto a consumo y toda la información actualizada que requieras para una gestión eficiente.
          </p>   

          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/Easysocio/Easysocio-software-para-administrar-gimnasisos-celular.png" alt="EasySocio el software para administrar gimnasios, academias de baile, institutos de inlges, academía de choferes y mucho mucho más. Easysocio está en la nuebe y lo puedes usar desde celulares y computadoras. Desde cualquier lugar. ">
          </div>
          
        </div>
      </div>
    </div>




    <div  class="site-section" id="Ventadtajas-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-1 order-lg-2">
          <h2 class="section-title mb-4">Agrégale valor a tu emprendimiento sin perder más tiempo ni energía en detalles de gestión</h2>
          <p>Los gimnasios hoy en día son uno de los emprendimientos de mayor auge. La industria del fittness y del cuidado personal se encuentra al alza, ya que millones de personas acuden en búsqueda de la oferta de productos y servicios que allí se ofrecen con la finalidad de mejorar su calidad de vida. Es un campo de trabajo y de inversión que abarca muchos aspectos, que van desde la estética personal, al bienestar físico y la salud. 
          </p>
          <p>  
          Una sociedad que promueve el cuidado personal a través de la promoción de buenas prácticas y hábitos saludables en los individuos, resulta un ambiente ideal para el surgimiento de muchas ideas y modelos de negocios asociados al cuidado del bienestar físico. Así que, bien sea que tienes un gimnasio con equipos para ejercicios anaeróbicos (pesas y máquinas de resistencia) una escuela de artes marciales, o un centro para las últimas tendencias del entrenamiento como el Crossfit, el bootcamp o el TRX, ya diste el primer paso y realizaste la inversión más importante, ahora lo que necesitas son los medios para llevar al éxito a tu emprendimiento.
          </p>  
          <p>  
          Para eso, no lo dudes, el mejor aliado con el que puedes contar es esta herramienta informática multifuncional que te ayudará con la administración de negocio para que puedas dedicar más tiempo a pensar en ofertas de servicios innovadores y estrategias de marketing que te permitan aumentar y fidelizar la clientela que requieres para lograr la rentabilidad que deseas de tu inversión.
          </p>  

          </div>
          <div class="col-lg-6 order-2 pl-lg-5 order-lg-1">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/programa-para-administrar-socios-en-la-nube.jpg" alt="Easysocio está en la nube. Por esa razon podrás acceder a los datos desde cualquier equipo, y no tendrás que preocuparte por actualizar ni pagar por las mejoras.">
          </div>
        </div>
      </div>
    </div>
  

    <div  class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">¿Qué es y cómo funciona EasySocio?</h2>
          <p>
             Se trata del software, para administrar gimnasios, más fácil de usar que hayas conocido, y no por eso deja de ser una herramienta poderosa y totalmente funcional, ya que te ofrece todas las utilidades necesarias para que la gestión del local no se convierta en un dolor de cabeza o te consuma mucho tiempo y energía.
          </p>
          <h2 class="section-title mb-4">¿Qué es y cómo funciona EasySocio?</h2>
          <p>
             <strong>(1)</strong>  - Gran parte de la información que necesitas se despliega la pantalla de inicio, pero a un click de distancia podrás obtener aún más detalles. 
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
        <div class="row align-items-center justify-content-center">
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
        <div class="row align-items-center justify-content-center">
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

     <div  class="site-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">Renovación automática de planes </h2>
           <p> 
            Easysocio tiene la opción de que se pueda renovar automáticamente el servicio de caracter mensual comprado por el socio por última vez. Por ejemplo: si en tu gimnasio se vende un servicio que se llama “pase libre” que se cobra por mes y un socio contrató este servicio el 01/05/2019, en la fecha de vencimiento (31/05/2019) el sistema renovará el pase libre creando otro servicio igual que vencerá el 30/06/2019. Esto hará que automáticamente se genere un movimiento de venta para ese socio el cual te pasará a deber el importe del servicio mensual renovado. En la imagen se ejemplifica esta funcionalidad. 
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
        <div class="row align-items-center justify-content-center">
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
    
@stop  


 
