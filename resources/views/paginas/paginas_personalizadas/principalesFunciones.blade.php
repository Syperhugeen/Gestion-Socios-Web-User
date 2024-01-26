<span v-if="scrolled">
  <section-card
    titulo_aclarador="¿Qué contrataron y cuándo se vence? ¿Quién tiene que pagar?"
    titulo=""
    background=""
    order="left"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/mebresias.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/mebresias.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Manejo de membresías
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>
      <p></p>
      <p>Despídete de la planilla de Excel para registrar tus ventas.</p>

      <p>
        Un camino sencillo para ahorrar tiempo y dinero es utilizar nuestro
        módulo de membresías. Te ofrecemos:
      </p>

      <ul>
        <li>Manejo de membresías sin límite de asistencia (pase libre).</li>
        <li>Manejo de membresías con límite de asistencia (cuponera).</li>
        <li>Renovaciones automáticas de membresías.</li>
      </ul>

      <p>
        Nuestro sistema te brinda la información precisa, en el momento y lugar
        que la necesitas, lo que se traduce en una mayor productividad para la
        administración de tu gimnasio.
      </p>
      <p>
        Disfruta la vida y deja las tareas administrativas aburridas para las
        computadoras 😉
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <div class="container">
    <div
      class="col-12 mb-3 mb-lg-0 d-flex flex-column align-items-center w-100"
    >
      <small class="text-center">Agregando una membresía a un socio</small>
      <div class="col-12 d-flex flex-column align-items-center">
        <video muted autoplay loop class="img-fluid">
          <source
            src="{{
              url()
            }}/imagenes/Easysocio/gifs/notebook/agregar-membresia.webm"
            type="video/webm"
          />
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>

  <div class="py-5 w-100 border-bottom border-primary"></div>

  <section-card
    titulo_aclarador="Asistencia a clases por agenda"
    titulo=""
    background=""
    order="right"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/reservas.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/reservas.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Reserva de clases online
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>
      <p></p>
      <p>
        ¿Tus clases tienen cupos limitados? ¿Estás organizando eso por WhatsApp?
        ¡Olvídalo!
      </p>

      <p>
        Automatiza este proceso con nuestro módulo de reservas online, fácil y
        sin estrés, para que no tengas que organizar más en el grupo de
        WhatsApp.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <lazy-width-observer>
    <div class="container">
      <div class="row mx-0 align-items-center">
        <div
          class="col-12 col-lg-6 mb-3 mb-lg-0 d-flex flex-column align-items-center w-100"
        >
          <small class="text-center"> Tu gestionando las reservas</small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{ url() }}/imagenes/Easysocio/gifs/notebook/reservas.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
          <small class="text-center"> Tu cliente reservando</small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{
                url()
              }}/imagenes/Easysocio/gifs/socioPanel/reserva-exito.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </lazy-width-observer>

  <div class="py-5 w-100 border-bottom border-primary"></div>

  <section-card
    titulo_aclarador="Control de ingresos y egresos"
    titulo=""
    background=""
    order="left"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/finanzas.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/finanzas.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Finanzas <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>
      <p></p>
      <p>
        ¿En qué gastas? ¿Cuánto vendes? Cuéntate la verdad llevando tus finanzas
        de manera sencilla con facilidad.
        <span class="font-secondary helper-aumenta-texto"> easy</span>.
      </p>

      <p>
        Usando
        <span class="font-secondary helper-aumenta-texto"> easy</span>socio
        tendrás toda la información de tu empresa sin tener que preocuparte de
        hacer los molestos balances mensuales.
      </p>

      <p>
        Divertite haciendo las cosas que te gustan y delegá en
        <span class="font-secondary helper-aumenta-texto"> easy</span>socio
        aquellas tareas que no te gustan.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>
  <lazy-width-observer>
    <div class="container">
      <div class="row mx-0 align-items-center">
        <div
          class="col-12 col-lg-6 mb-3 mb-lg-0 d-flex flex-column align-items-center w-100"
        >
          <small class="text-center"> Tu agregando un gastos o ingresos</small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{ url() }}/imagenes/Easysocio/gifs/notebook/gastos.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
          <small class="text-center">
            Tu viendo los reportes de gastos e ingresos
          </small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{ url() }}/imagenes/Easysocio/gifs/notebook/analitics.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </lazy-width-observer>

  <div class="py-5 w-100 border-bottom border-primary"></div>

  <section-card
    titulo_aclarador="¿Quién puede acceder?"
    titulo=""
    background=""
    order="right"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/control.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/control.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Control de acceso
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        ¿Disfrutas tener que informar a alguien que tiene una deuda? ¡Por
        supuesto que no!
      </p>
      <p>
        Deja esa tarea en nuestras manos 😉. Nos encargaremos de informar a cada
        cliente que entre a tu negocio sobre el estado de su membresía. En caso
        de que la membresía esté vencida, emitiremos una alerta para que estés
        al tanto de la situación.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <lazy-width-observer>
    <div class="container">
      <div class="row mx-0 align-items-center">
        <div
          class="col-12 col-lg-6 mb-3 mb-lg-0 d-flex flex-column align-items-center w-100"
        >
          <small class="text-center"> Tu cliente ingresando </small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{
                url()
              }}/imagenes/Easysocio/gifs/socioPanel/control-de-acceso.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
          <small class="text-center"> Tu viendo los accesos </small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{
                url()
              }}/imagenes/Easysocio/gifs/notebook/ver-accesos.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </lazy-width-observer>
  <lazy-width-observer>
    <div class="container mt-5 pt-4">
      <div class="row mx-0 align-items-center">
        <h3 class="text-center h4 w-100">
          La funcionalidad de control de acceso es compatible con los siguientes
          equipos de reconocimiento facial👇
        </h3>
        <div class="rounded-lg background-gris-0 p-1 p-lg-5">
          <access-devices> </access-devices>
        </div>
      </div>
    </div>
  </lazy-width-observer>

  <div class="py-5 w-100 border-bottom border-primary"></div>
  <section-card
    titulo_aclarador="Manejo de stock y venta de productos"
    titulo=""
    background=""
    order="left"
    :con_parte_oculta="false"
    video="si"
    url_img_chica="{{ url() }}/imagenes/Easysocio/gifs/notebook/productos.webm"
    url_img_grande="{{ url() }}/imagenes/Easysocio/gifs/notebook/productos.webm"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Control de inventario y ventas de productos
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        Optimiza la gestión de tu negocio con nuestro completo sistema de
        "Control de inventario y ventas de productos". Mantén un control
        detallado de tu inventario, realiza un seguimiento preciso de las ventas
        y maximiza la eficiencia en la gestión de tu stock. Con nuestra
        solución, podrás tomar decisiones informadas, prevenir pérdidas y
        garantizar una operación fluida y exitosa. Simplifica tus procesos y
        potencia tu negocio con un control integral que te brinda fácil acceso a
        la información clave.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <div class="py-5 w-100 border-bottom border-primary"></div>
  <section-card
    titulo_aclarador="Identificación con código de barras"
    titulo=""
    background=""
    order="right"
    :con_parte_oculta="false"
    video="si"
    url_img_chica="{{
      url()
    }}/imagenes/Easysocio/gifs/notebook/codigo-de-barras.webm"
    url_img_grande="{{
      url()
    }}/imagenes/Easysocio/gifs/notebook/codigo-de-barras.webm"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Creación de tarjetas de identificación con códigos de barras
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        Las tarjetas de identificación con códigos de barras tienen como
        finalidad facilitar el acceso mediante un lector de códigos de barras en
        los puntos de control. Al utilizar este sistema, se agiliza el proceso
        de verificación de identidad y se refuerza la seguridad. En caso de
        necesidad, las tarjetas pueden ser enviadas por correo electrónico o
        descargadas con tan solo un clic, proporcionando una solución
        conveniente y eficiente para la distribución y gestión de
        identificaciones.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <div class="py-5 w-100 border-bottom border-primary"></div>

  <section-card
    titulo_aclarador="Ranking de socios"
    titulo=""
    background=""
    order="left"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/ranking.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/ranking.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Insentivá la competencia (friendly) 🏆
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        ¿Quiénes vienen más? ¿Quiénes se esfuerzan más? ¿Quiénes cumplen con su
        compromiso? ¿Quiénes se destacan más?
      </p>
      <p>
        Te organizaremos toda esta información de manera
        <span class="font-secondary helper-aumenta-texto"> easy </span> para que
        puedas tomar acciones, crear competencias o lo que se te ocurra.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <section-card
    titulo_aclarador="Seguimiento de socio"
    titulo=""
    background=""
    order="right"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/seguimiento.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/seguimiento.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Te ayudamos a monitorear cómo viene el socio con respecto a sus
        objetivos
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        ¿Qué es lo típico por lo cual alguien va a un gimnasio? "Quiero bajar de
        peso". Para ayudarte a cumplir con eso creamos sistema de seguimiento
        (que te dará graficas, datos, y más) el cual hará que seguir la
        evolución del peso corporal de un socio sea pan comido.
      </p>
      <p>
        Además del peso corporal podrás hacer seguimiento de
        <strong>lo que se te ocurra</strong> ¿<span
          class="font-secondary helper-aumenta-texto"
        >
          easy
        </span>
        no?.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <lazy-width-observer>
    <div class="container">
      <div class="row mx-0 align-items-center">
        <div
          class="col-12 col-lg-6 mb-3 mb-lg-0 d-flex flex-column align-items-center w-100"
        >
          <small class="text-center"> Tu cliente ingresando seguimientos</small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{
                url()
              }}/imagenes/Easysocio/gifs/socioPanel/seguimientos.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
          <small class="text-center">
            Tu viendo y gestionando los seguimientos
          </small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{
                url()
              }}/imagenes/Easysocio/gifs/notebook/seguimientos.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </lazy-width-observer>

  <div class="py-5 w-100 border-bottom border-primary"></div>

  <section-card
    titulo_aclarador="Rutinas"
    titulo=""
    background=""
    order="left"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/rutinas.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/rutinas.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Rutinas de entrenamiento
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        Creá de manera simple rutinas de entrenamientos detallando los
        ejercicios y días en los cuales se tienen que hacer, inclusive podrás
        agregar videos e imágenes explicando los ejercicio.
      </p>
      <p>
        Luego asigná la rutina a los socios que quieras. Ellos podrán ver las
        rutinas desde su celular ¿<span
          class="font-secondary helper-aumenta-texto"
        >
          easy
        </span>
        no?
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <section-card
    titulo_aclarador="Dietas"
    titulo=""
    background=""
    order="right"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/dietas.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/dietas.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Potenciá tu servicio recomendando dietas
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        Creá dietas y superá las espectativas de tus clientes. Podrás
        especificar que deben comer, cuando y como. Si lo crees necesario podrás
        agregar videos e imágenes.
      </p>
      <p>
        Luego asigná la dieta a los socios que quieras. Ellos podrán ver toda
        esa info desde su celular ¿<span
          class="font-secondary helper-aumenta-texto"
        >
          easy
        </span>
        no?
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>
  <lazy-width-observer>
    <div class="container">
      <div class="row mx-0 align-items-center">
        <div
          class="col-12 col-lg-6 mb-3 mb-lg-0 d-flex flex-column align-items-center w-100"
        >
          <small class="text-center">
            Tu cliente viendo sus rutinas o dietas</small
          >

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{ url() }}/imagenes/Easysocio/gifs/socioPanel/rutinas.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
          <small class="text-center">
            Tu creando y gestionando las rutinas o dietas
          </small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{ url() }}/imagenes/Easysocio/gifs/notebook/rutinas.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </lazy-width-observer>

  <div class="py-5 w-100 border-bottom border-primary"></div>

  <section-card
    titulo_aclarador="Cumpleaños"
    titulo=""
    background=""
    order="left"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/cumpleanos.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/cumpleanos.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Alerta de cumpleaños 🎂
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        Hacé sentir especiales a tus socios y prepará algo para homenagear. El
        ratio de fidelidad despegará 🚀 ¿<span
          class="font-secondary helper-aumenta-texto"
        >
          easy
        </span>
        no?
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <section-card
    titulo_aclarador="Automatiza la Comunicación con tus Socios"
    titulo=""
    background=""
    order="right"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/emails.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/emails.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Emails Inteligentes para Cada Ocasión
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        ¡Mantén a tus socios siempre informados y conectados de la manera más
        fácil! Con Easysocio, nuestra función de envío automático de emails se
        encarga de todo por ti. Desde recordatorios sobre vencimientos de
        membresías hasta recibos de compras, cada comunicación importante se
        gestiona automáticamente. Imagina enviar felicitaciones personalizadas a
        tus socios en sus cumpleaños, o recordatorios de sus clases reservadas
        sin tener que levantar un dedo. Esta funcionalidad no solo ahorra
        tiempo, sino que también asegura una experiencia consistente y
        personalizada para cada socio. Con Easysocio, la comunicación eficiente
        es solo el comienzo de una gestión excepcional.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <section-card
    titulo_aclarador="Transición Fácil"
    titulo=""
    background=""
    order="left"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/importar-socios.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/importar-socios.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Carga Tus Socios Directamente desde Excel
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        ¿Estás pensando en cambiar a Easysocio y te preocupa cómo transferir tu
        actual base de clientes? ¡Tenemos la solución perfecta para ti! Con
        nuestra función de importación desde Excel, la transición es rápida y
        sencilla. Si ya tienes una lista de socios en una planilla de Excel,
        puedes cargarla directamente en nuestro sistema. Esto es ideal si estás
        migrando de otro software o si ya cuentas con una base de datos de
        clientes. Simplemente sube tu archivo Excel y nuestro sistema se
        encargará del resto, asegurando que la transición a Easysocio sea fluida
        y sin complicaciones. ¡Cambia a una gestión más inteligente y eficiente
        sin perder ningún dato importante de tus socios!
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <section-card
    titulo_aclarador="Feedback de los socios"
    titulo=""
    background=""
    order="right"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/reviews.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/reviews.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Le pedimos a tus socios que te den feedback ⭐⭐⭐⭐⭐
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        Obten puntuaciones y comentarios por parte de tus socios de forma
        automática, ¿<span class="font-secondary helper-aumenta-texto">
          easy
        </span>
        no?. Esto te ayudará a mejorar tu servicio e incrementar la fidelidad de
        tus socios.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>

  <lazy-width-observer>
    <div class="container">
      <div class="row mx-0 align-items-center">
        <div
          class="col-12 col-lg-6 mb-3 mb-lg-0 d-flex flex-column align-items-center w-100"
        >
          <small class="text-center"> Tu cliente calificando una clase</small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{ url() }}/imagenes/Easysocio/gifs/socioPanel/review.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
          <small class="text-center"> Tu viendo las calificaciones </small>

          <video muted autoplay loop class="img-fluid">
            <source
              src="{{ url() }}/imagenes/Easysocio/gifs/notebook/review.webm"
              type="video/webm"
            />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </lazy-width-observer>

  <div class="py-5 w-100 border-bottom border-primary"></div>

  <section-card
    titulo_aclarador="Panel de Control en Tiempo Real"
    titulo=""
    background=""
    order="left"
    :con_parte_oculta="false"
    url_img_chica="{{ url() }}/imagenes/Drwas/real-time.png"
    url_img_grande="{{ url() }}/imagenes/Drwas/real-time.png"
  >
    <template slot="description-visible">
      <h3 class="mb-4">
        Tu Gimnasio, Más Conectado y Dinámico
        <span class="font-secondary helper-aumenta-texto"> easy </span>
      </h3>

      <p>
        Imagina tener toda la información clave de tu gimnasio al alcance de la
        vista, actualizada al instante, como en un aeropuerto. ¡Eso es lo que te
        ofrece nuestro software con su función de Panel de Control en Tiempo
        Real! Esta herramienta innovadora muestra las agendas del día y el
        ranking de socios en una pantalla accesible dentro de tu gimnasio.
        Podrás ver quién ha reservado para cada clase, cuántos cupos quedan
        disponibles y quiénes han asistido, todo actualizado al momento. Además,
        el ranking del mes de los socios agrega un toque de emoción y
        motivación. Esta función está diseñada no solo para facilitar la
        gestión, sino también para involucrar a los socios, creando un ambiente
        de comunidad y competencia sana. Deja esta pantalla abierta en tu
        gimnasio y observa cómo se transforma la experiencia de tus socios.
      </p>

      <div class="mt-2">
        <a
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          class="btn btn-lg btn-primary cursor-pointer text-white"
        >
          Comenzar a probar gratis</a
        >
      </div>
      <small>No te pediremos que ingreses tarjeta de crédito.</small>
    </template>
  </section-card>
</span>
