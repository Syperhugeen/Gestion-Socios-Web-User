@extends('layouts.credo.layout_pricnipal')




{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}
{{--*/ $Titulo                = $Portada->titulo_de_la_pagina /*--}}
{{--*/ $DescriptionEtiqueta   = $Portada->description_de_la_pagina   /*--}}
{{--*/ $PalabrasClaves        = 'Software para gimnasios, gym software' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}

@section('pixcel-facebook')
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1301666320204392');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1301666320204392&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

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
   @include('paginas.home.vue.section-card')
   @include('paginas.home.vue.pregunta-componente')
   @include('paginas.home.vue.slider-text')
   @include('paginas.home.vue.portada')
   @include('paginas.home.vue.simple-card')
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



        <portada altura_portada="60"


        >

            <template slot="titulo">
              <h1 class="text-white mb-5">
                  Software para gestionar gimnasios o  <slider-text :data="[

{name:'escuelas de danza',url:'https://mwebs.com.uy/programa-para-administrar-academias-de-baile-online'},
{name:'box de crossfit'},
{name:'academía de artes marciales'}

]"></slider-text>
              </h1>
            </template>
            <template slot="descripcion">
              <ul class="mb-5">
                <li class="text-white espacio-letras"> Manejo de mebresías <span class="font-secondary helper-aumenta-texto"> <b>easy</b>  </span></li>
                <li class="text-white espacio-letras"> Finanzas <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Reservas online de clases <span class="font-secondary helper-aumenta-texto"> easy </span></li>
                <li class="text-white espacio-letras"> Control de acceso <span class="font-secondary helper-aumenta-texto"> easy </span></li>
              </ul>

               <a href="#intro" class="btn btn-success mr-2 cursor-pointer text-white"> Comenzar ahora</a>
               <a href="#intro" class="btn  btn-outline-light cursor-pointer"> Seguir leyendo</a>

               <img class="d-none d-lg-block " style="position: absolute; right:0; top:40%; height:auto; width:600px;"  src="{{url()}}/imagenes/Easysocio/Capturas/socios-listado-notebook.png" alt="">

            </template>







        </portada>

      <span id="intro"></span>



      <section class="site-section pb-5 background-gris-0" >
        <div class="container">
          <div class="row">
      <div class="col-12 mb-5 position-relative">

         @if( Session::get('esDeUruguay'))
         <div class="w-100 d-flex flex-column align-items-center mb-2">
          <div class="d-flex flex-row align-items-center">
            <small class=" mb-0 mr-2 text-center text-uppercase">Software made in Uruguay</small>
            <img class="shadow-sm mr-2 rounded-circle border border-light" height="30" width="30" src="{{url()}}/imagenes/monedas/{{  Session::get('esDeUruguay') ? 'pesos.jpg' : 'dolar.jpg'}}" alt="Moneda">
          </div>

         </div>


         @endif

              <h2 class="sub-titulos-class mb-4 text-center text-color-primary">EasySocio es el Software para la gestión de <slider-text :data="[{name:'gimnasios'},{name:'escuelas de danza'},{name:'academias de artes marciales'},{name:'box funcionales'}]"></slider-text> </h2>
              <p class="text-center mb-0">EasySocio es una plataforma digital que te ofrece mucho más que un sistema contable para <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-administrar-un-gimnasio:-6-consejos-para-que-lo-hagas-bien/24"> administrar tu gimnasio</a>. Se trata de un conjunto de utilidades que te permitirán brindar un óptimo servicio para tus clientes al tiempo que facilita tu trabajo para que lo realices de manera rápida y sencilla.
              </p>

            </div>
          </div>
        </div>
    </section>


    <section class="site-section background-white" >
    <div class="container ">
    <div class="row justify-content-center">
      <div class="col-12 mb-5 position-relative">
          <p class="text-center text-uppercase mb-1"><strong>¿Qué resolvemos?</strong></p>
          <h3 class="text-center mb-0 h2">Nuestra solución </h3>
      </div>
      <div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Manejo de mebresías" >
            <template slot="icono">
              <div class="text-color-primary h3 rounded  mb-1 ">
                  <i class="fas fa-users"></i>
               </div>
            </template>

            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2  mb-3 mb-lg-0">
          <simple-card titulo="Reservas online">
            <template slot="icono">
              <div class="text-color-primary h3 rounded  mb-1 ">
              <i class="far fa-calendar-alt"></i>
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                 Te ayudaremos a organizar las clases, permitiendo a tus socios hacer reservas de clases online.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2  mb-3 mb-lg-0">
          <simple-card titulo="Finanzas">
            <template slot="icono">
              <div class="text-color-primary h3 rounded  mb-1 ">
                  <i class="fas fa-cash-register"></i>
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Cada operación que hagas se irá registrando y luego podremos darte informes que te dirán lo que vendiste y lo que gastaste.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2  mb-3 mb-lg-0">
          <simple-card titulo="Control de acceso">
            <template slot="icono">
              <div class="text-color-primary h3 rounded  mb-1 ">
                  <i class="fas fa-check-circle"></i>
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Es fastidioso tener que decirle a alquien que tiene que pagar. Nosotros nos ocuparemos de eso al momento que tu socios pasa por el control de acceso.
                </div>
            </template>
          </simple-card>
      </div>



      <p class="col-12 text-center mt-5 ">
            <a href="">Ver todas las funcionalidades</a>
      </p>

    </div>


    </div>

    </section>



    <section class="site-section background-gris-1" >

    <div class="container ">
      <div class="row justify-content-center">

      <div class="col-12 mb-5 position-relative">
          <p class="text-center text-uppercase mb-1">¿Para quién es?</p>
          <h3 class="text-center mb-0 h2">Lo creamos pensando en ...</h3>
      </div>

      <div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Gimnasios de pesas" call_to_action="Más información" url="{{route('get_programa_para_gestionar_gimancios')}}">
            <template slot="icono">
              <div class="rounded  mb-2 ">
                  <img src="{{url()}}/imagenes/Easysocio/SirvePara/pesas.jpg" class="img-fluid rounded" alt="">
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Centros de entrenamiento funcional" call_to_action="Más información" url="https://worldmaster.com.uy/">
            <template slot="icono">
            <div class="rounded  mb-2 ">
                  <img src="{{url()}}/imagenes/Easysocio/SirvePara/box-funcional.jpg" class="img-fluid rounded" alt="">
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Academías de baile" call_to_action="Más información" url="https://worldmaster.com.uy/">
            <template slot="icono">
            <div class="rounded  mb-2 ">
                  <img src="{{url()}}/imagenes/Easysocio/SirvePara/danza.jpg" class="img-fluid rounded" alt="">
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Escuelas de artes marciales" call_to_action="Más información" url="https://worldmaster.com.uy/">
            <template slot="icono">
            <div class="rounded  mb-2 ">
                  <img src="{{url()}}/imagenes/Easysocio/SirvePara/artes-marciales.jpg" class="img-fluid rounded" alt="">
               </div>
            </template>

            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>
    </div>
    </div>

    </section>



    @include('paginas.paginas_personalizadas.planes')
    @include('paginas.paginas_personalizadas.preguntasFrecuentes')
    @include('paginas.paginas_personalizadas.blog')







  <div v-lazy-container="{ selector: 'img' }" class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class=" mb-4">¿Tenés un gimnasio y te encontrás en el punto que la gestión de tus socios se hace complicada?</h2>

          <p>En la industria de los negocios de acondicionamiento físico, es normal que en la medida en que comienza a crecer el volumen de clientes, cada vez se haga más difícil mantener al día los estados de cuentas de cada uno. Puede llegar a ocurrir que si son muchos no sepas distinguir quienes se encuentran al día con sus pagos y quienes te deben dinero. Si esta situación te resulta familiar haz encontrado la herramienta que necesitas para solucionar tus problemas de administración de forma sencilla y por una inversión mínima. Te invitamos a conocer EasySocio.
          </p>
          <p>
            Esta tecnología te permite como administrador de uno o varios gimnasios saber cuál es el estado financiero del negocio en tiempo real, desde cualquier ubicación a través de un dispositivo móvil como un celular o tu laptop. Además podrás obtener información valiosa sobre las estadísticas de los servicios más utilizados por los clientes, las tendencias en cuanto a consumo y toda la información actualizada que requieras para una gestión eficiente.
          </p>

          </div>
          <div class="d-flex flex-row align-items-center justify-content-center col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/Easysocio/Easysocio-software-para-administrar-gimnasisos-celular.png" alt="EasySocio el software para administrar gimnasios, academias de baile, institutos de inlges, academía de choferes y mucho mucho más. Easysocio está en la nuebe y lo puedes usar desde celulares y computadoras. Desde cualquier lugar. ">
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
          Una sociedad que promueve el cuidado personal a través de la promoción de buenas prácticas y hábitos saludables en los individuos, resulta un ambiente ideal para el surgimiento de muchas ideas y modelos de negocios asociados al cuidado del bienestar físico. Así que, bien sea que tienes un gimnasio con equipos para ejercicios anaeróbicos (pesas y máquinas de resistencia) una escuela de artes marciales, o un centro para las últimas tendencias del entrenamiento como el Crossfit, el bootcamp o el TRX, ya diste el primer paso y realizaste la inversión más importante, ahora lo que necesitas son los medios para <a href="https://gestionsocios.com.uy/blog/las-cuatro-reglas-de-oro-para-tener-un-gimnasio-exitoso/25">llevar al éxito a tu emprendimiento</a>.
          </p>
          <p>
          Para eso, no lo dudes, el mejor aliado con el que puedes contar es esta herramienta informática multifuncional que te ayudará con la administración de negocio para que puedas dedicar más tiempo a pensar en ofertas de servicios innovadores y estrategias de <a href="https://gestionsocios.com.uy/blog/6-estrategias-de-marketing-para-gimnasios/29">marketing</a>  que te permitan aumentar y fidelizar la clientela que requieres para lograr la rentabilidad que deseas de tu inversión.
          </p>

          </div>
          <div v-lazy-container="{ selector: 'img' }" class="d-flex flex-row align-items-center justify-content-center col-lg-6 order-2 pl-lg-5 order-lg-1">
            <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/Easysocio/Easysocio-software-para-administrar-gimnasisos-notebook.png" alt="Easysocio está en la nube. Por esa razon podrás acceder a los datos desde cualquier equipo, y no tendrás que preocuparte por actualizar ni pagar por las mejoras.">
          </div>
        </div>
      </div>
    </div>

    <div  class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-12 order-2 order-lg-1">
          <h2 class="section-title mb-4 text-center">¿Qué es y cómo funciona EasySocio?</h2>
          <p class="text-center">
             Se trata del software, para <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-administrar-un-gimnasio:-6-consejos-para-que-lo-hagas-bien/24">administrar gimnasios</a>, más fácil de usar que hayas conocido, y no por eso deja de ser una herramienta poderosa y totalmente funcional, ya que te ofrece todas las utilidades necesarias para que la gestión del local no se convierta en un dolor de cabeza o te consuma mucho tiempo y energía.
          </p>
          <h2 class="parrafo-class mb-2 text-center"><b>Algunos de los beneficios que podemos enumerar en cuanto a las funciones con las que cuenta EasySocio</b> </h2>
          </div>

        </div>
      </div>
    </div>

    {{-- N u e b e --}}
    <div  class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1">
          <h3 class="section-title mb-4 ">EasySocio se encuentra alojado en la nube</h3>
         <p class="">
              Esta es la primera ventaja que debes tener presente sobre nuestra herramienta, ya que se trata de una característica que te ahorra tiempo y dinero, al evitar las incómodas instalaciones de software y el inevitable soporte técnico que requieren.
            </p>
            <p class="">
              Además, no deberás adquirir y mantener servidores que representan una gran inversión tanto en hardware como en técnicos que lo manejen y le den servicio permanente. Te evitas las actualizaciones de la memoria para poder crear los respaldos necesarios y todos los costos asociados a estas actividades y a la reposición de equipos producto de la obsolescencia tecnológica.
            </p>
            <p class="">
              Esta característica hace que con disponer de un dispositivo con el que te puedas conectar para navegar en internet, bien sea un teléfono móvil, una Tablet o un pc portátil o de escritorio, tendrás acceso a tu plataforma de administración a través de tu navegador preferido, sin importar el lugar donde estés, ya sea en tu oficina, en tu casa o en un chalet a la orilla de la playa o la montaña.
            </p>
            <p class="">
              Así dejarás de preocuparte porque la computadora se rompió, se quedó congelada o simplemente la dejaste olvidada cuando más la necesitabas, ya que podrás acceder a tu sesión de trabajo donde la dejaste la última vez desde cualquier equipo conectado a internet.
            </p>
          </div>


          <div v-lazy-container="{ selector: 'img' }" class="d-flex flex-row align-items-center justify-content-center col-lg-6 order-1 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/programa-para-administrar-socios-en-la-nube.jpg" alt="Easysocio está en la nube. Por esa razon podrás acceder a los datos desde cualquier equipo, y no tendrás que preocuparte por actualizar ni pagar por las mejoras.">
          </div>

         {{--  <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/vista-del-listado-de-easysocio-de-los-socios.jpg" alt="Lo mejor de Easysocio es su simplicidad de uso, realemnte tendrás la información que mas necesitás. ">
          </div> --}}

        </div>
      </div>
    </div>

   {{-- V e r s i ó n   a c t u a l i z a d a  --}}
   <div  class="site-section bg-light">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-1 order-lg-2">
          <h3 class="section-title mb-4">Con EasySocio siempre dispondrás de la versión más actualizada</h3>
           <p>Ya no necesitas actualizar de manera permanente el software de gestión, dedicando tiempo o debiendo comprar nuevas licencias para lograrlo. Con EasySocio, las actualizaciones son automáticas y seguras, siempre dispondrás de la última versión que existe del software, parches de seguridad y actualizaciones.
           </p>
          </div>
          <div v-lazy-container="{ selector: 'img' }" class="d-flex flex-row align-items-center justify-content-center col-lg-6 order-2 pl-lg-5 order-lg-1">
            <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/Easysocio/Home/sin-actualziaciones.png" alt="Este programa de administración tiene estado de cuenta incorporado, es decir, vas a poder saber en que han gastado tus socios y si están al día o no.">
          </div>
        </div>
      </div>
    </div>

    {{-- E s  f á c i l   d e   u s a r --}}
    <div  class="site-section " >
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1">
          <h3 class="section-title mb-4">EasySocio es fácil de usar </h3>
          <p>Nuestro sistema te permite tener la información justa, cuando la necesitas y donde la necesitas, lo que se traduce en una mayor productividad para la <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-administrar-un-gimnasio:-6-consejos-para-que-lo-hagas-bien/24"> administración de tu gimnasio</a>. Se trata de un software sencillo, rápido de aprender a usar por lo intuitivo y amigable que le resulta al usuario, tanto que podrás explicarle a tu abuela cómo hacerlo para que te ayude a llevar las cuentas del negocio.
          </p>
          <p>
            Algunas de sus ventajas más resaltantes son:
          </p>

          <div class="pl-3">
            <p class="lista-icono">
              La pantalla de inicio contiene buena parte de la información más relevante, al tiempo que, con solo hacer click podrás obtener información al detalle sobre los diferentes aspectos de la <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-administrar-un-gimnasio:-6-consejos-para-que-lo-hagas-bien/24">administración de tu gimnasio</a>.
            </p>
            <p class="lista-icono">
              El listado de la captura te permite observar rápidamente los planes o paquetes contratados por el socio y las fechas de vencimiento.
            </p>
            <p class="lista-icono">
              Con solo hacer click sobre el número de celular registrado del socio podrás enviar un mensaje vía WhatsApp, lo que te ayudará a brindar un servicio personalizado y a implementar <a href="https://gestionsocios.com.uy/blog/6-estrategias-de-marketing-para-gimnasios/29">estrategias de marketing</a>  y <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-enamorar-y-fidelizar-a-los-clientes-de-mi-gimnasio/28">fidelización</a>  de forma muy sencilla.
            </p>
            <p class="lista-icono">
              Podrás gestionar cuponeras para clases o servicios de forma virtual. También podrás <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-mejorar-las-ventas-en-tu-gimnasios:-3-consejo-que-te-ayudar%C3%A1n-a-lograrlo/27">vender</a>  clases o sesiones especiales de entrenamiento con fecha y hora establecida, además podrás llevar el control de la ejecución de estos servicios.
            </p>
            <p class="lista-icono mb-0">
              Estado de cuenta del socio de forma inmediata y de fácil acceso.
            </p>
          </div>

          </div>
          <div v-lazy-container="{ selector: 'img' }" class="col-lg-6 order-3 pl-lg-5 order-lg-2 d-flex flex-row align-items-center justify-content-center">
          <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/Easysocio/Home/easysocio-es-simple-de-usar.png" alt="Easysocio cuenta con movimientos de caja, sabrás de donde sale cada registro sea un ingres (venta) como un egreso (gasto). También sabrás que usuario(operador del sistema de administración)  fué el que lo registró. Es Multi moneda y multi sucursal. Todo para que le saques provecho y que tu gestión de negocio sea simple.">
          </div>
        </div>
      </div>
    </div>

    {{-- E s t a d o   d e   c u e n t a   --}}
     <div  class="site-section bg-light">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 order-1 order-lg-2">
            <h3 class="section-title mb-4">Nuestro software permite integrar el estado de cuenta de los clientes</h3>
             <p>El sistema de EasySocio, permite que en el registro de cada cliente, puedas asociar sus cuentas corrientes, de este modo optimizas tu gestión ya que podrás registrar con detalle los movimientos de las ventas de los productos y servicios, así como otros gastos, de cada usuario. Por ejemplo, el pago de un accesorio, indumentaria u otro producto que comercialices en tu local, o la adquisición de un paquete para clases de spinning. <b>Siempre sabrás lo que ha sido contratado o comprado y el monto acreditado o el saldo pendiente por cubrir</b> .
             </p>
            </div>
            <div v-lazy-container="{ selector: 'img' }" class="col-lg-6 order-2 pl-lg-5 order-lg-1 d-flex flex-row align-items-center justify-content-center">
              <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/estado-de-cuenta-de-programa-de-administracion-de-socio.jpg" alt="Este programa de administración tiene estado de cuenta incorporado, es decir, vas a poder saber en que han gastado tus socios y si están al día o no.">
            </div>
          </div>
        </div>
      </div>

      {{-- E s t a d o   d e   c u e n t a   --}}
     <div  class="site-section ">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 order-1 order-lg-1">
            <h3 class="section-title mb-4">Movimientos de caja</h3>
             <p>Es normal que dentro de un local como un gimnasio, o cualquier centro de entrenamiento físico, se disponga de un personal de apoyo en la administración, es probable que debas delegar en ellos el manejo de la caja, el cobro a los clientes y otras funciones relacionadas con las finanzas. EasySocio te permite mantener absoluto control del dinero que ingresa a tu local, los pagos realizados por los socios y la cantidad de efectivo, pagos por punto de <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-mejorar-las-ventas-en-tu-gimnasios:-3-consejo-que-te-ayudar%C3%A1n-a-lograrlo/27">venta</a>, o incluso multimonedas, que se realicen. Esta función es de mucha utilidad, pues podrás hacer verificaciones de los movimientos de caja con el dinero disponible, y así podrás evitar malas sorpresas.
             </p>
             <p>
               Cada movimiento realizado se asocia al usuario del sistema que lo realiza, por lo que siempre sabrás quién hizo cada movimiento y así serán responsables del dinero que manejan.
             </p>
             <p>
               El sistema te permite realizar cobros en diversos tipos de monedas, así si cobras algunos servicios en moneda local puedes registrarlos, y si cobras algún servicio o producto especial en dólares, también puedes llevar ese control en el mismo lugar.
             </p>
             <p>
               Otra funcionalidad importante es que EasySocio dispone de una versión para negocios que disponen de varias sucursales, lo que te permite tener todos los movimientos diferenciados pero concentrados en la misma aplicación. Así, fácilmente puedes llevar control del funcionamiento de tu emprendimiento en diversas localidades al mismo tiempo sin necesidad de desplazarte a alguno de los locales en particular.
             </p>
            </div>
            <div v-lazy-container="{ selector: 'img' }" class="col-lg-6 order-2 pl-lg-5 order-lg-2 d-flex flex-row align-items-center justify-content-center">
              <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/estado-de-cuenta-de-programa-de-administracion-de-socio.jpg" alt="Este programa de administración tiene estado de cuenta incorporado, es decir, vas a poder saber en que han gastado tus socios y si están al día o no.">
            </div>
          </div>
        </div>
      </div>

     {{-- R e n o v a c i ó n   --}}
     <div  class="site-section bg-light">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 order-1 order-lg-2">
            <h3 class="section-title mb-4">Facilidades para la renovación de planes para los clientes</h3>
             <p>Nuestro módulo de <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-mejorar-las-ventas-en-tu-gimnasios:-3-consejo-que-te-ayudar%C3%A1n-a-lograrlo/27">ventas</a>  te permite renovar automáticamente el servicio de afiliación mensual de los socios, replicando el último paquete adquirido por estos. Por ejemplo, si se vende un servicio del tipo “pase libre” que permite el uso ilimitado de las instalaciones de tu gimnasio, cuya adquisición y pago es mensual, el sistema, en la fecha de vencimiento realizará de manera automática el cobro y la recarga de un nuevo paquete. Generando un nuevo movimiento de venta para ese socio que solo deberá realizar el pago del mismo.
             </p>
             <p>
               Nuestra herramienta ha sido desarrollada con la colaboración y el intercambio permanente con los dueños y <a href="https://gestionsocios.com.uy/blog/c%C3%B3mo-administrar-un-gimnasio:-6-consejos-para-que-lo-hagas-bien/24"> administradores de gimnasios</a>, y negocios de entrenamiento físico como academias de baile, dojos de kárate, entre muchos otros. Por eso estamos convencidos de que contamos con una herramienta muy útil, que tiene todos los elementos indispensables para facilitarte la administración de tu local, a un costo muy accesible y muy fácil de aprender a utilizar.
             </p>
            </div>
            <div v-lazy-container="{ selector: 'img' }" class="col-lg-6 order-2 pl-lg-5 order-lg-1 d-flex flex-row align-items-center justify-content-center">
              <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/antes-y-despues-del-vencimiento-en-el-prgrama-de-administracion.jpg" alt="Este programa de administración tiene estado de cuenta incorporado, es decir, vas a poder saber en que han gastado tus socios y si están al día o no.">
            </div>
          </div>
        </div>
      </div>

      {{-- C a p a c i t a c i ó n   --}}
     <div  class="site-section ">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 order-1 order-lg-1">
            <h3 class="section-title mb-4">Capacitación y soporte</h3>
             <p>Adicionalmente, tenemos el personal disponible para brindarle una atención personalizada que le permita aprender paso a paso a utilizar nuestro sistema, que por sus características es muy intuitivo y amigable, para una iniciación rápida y efectiva que te convertirá muy pronto en un experto.
             </p>
             <p>
              Personalmente y en conjunto con mi equipo de trabajo te brindaremos el soporte necesario, ya que estamos completamente a disposición de nuestros clientes para brindarles todo el apoyo necesario cuando lo requieras.
             </p>
            </div>
            <div v-lazy-container="{ selector: 'img' }" class="col-lg-6 order-2 pl-lg-5 order-lg-2 d-flex flex-row align-items-center justify-content-center">
              <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/programa-para-gestionar-socios-entrenamiento-a-clientes.jpg" alt="Este programa de administración tiene estado de cuenta incorporado, es decir, vas a poder saber en que han gastado tus socios y si están al día o no.">
            </div>
          </div>
        </div>
      </div>







@stop
