<lazy-width-observer>
<div class="site-section background-gris-1">
  <div class="container">
    <div class="row" v-lazy-container="{ selector: 'img' }">
      <div class="col-12 position-relative">
        <p class="text-center text-uppercase">Preguntas frecuentes</p>
        <h2 class="col-12 text-bold h2 text-center mb-5">FAQ</h2>

        <div class="w-100 mb-3"></div>
      </div>

      <div class="col-12">
        <div class="col-12">
          <pregunta-componente pregunta="¿Cuál es el precio?" :muestra="true">
            <template slot="respuesta">
              <p>
                Dado que cada negocio es único, hemos diseñado una variedad de
                planes adaptados a diferentes tipos de emprendimientos. Descubre
                las opciones disponibles y conoce nuestros planes y precios
                <a href="{{ route('get_pagina_precios') }}">
                  <strong>aquí</strong> </a
                >.
                <br />

                <a
                  href="{{ route('get_pagina_precios') }}
							"
                  class="btn btn-primary mt-3"
                  >Explorar planes y precios</a
                >
              </p>
            </template>
          </pregunta-componente>
        </div>

        <div class="col-12">
          <pregunta-componente
            pregunta="¿Cuál es el procedimiento a seguir si estoy interesado en contratar su servicio?"
            :muestra="false"
          >
            <template slot="respuesta">
              <ol>
                <li>
                  Comienza probando el software
                  <a
                    href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
                    class=""
                    >aquí</a
                  >.
                </li>
                <li>
                  Si te ha gustado, elige el plan que más se adapte a tus
                  necesidades
                  <a href="{{ route('get_pagina_precios') }}">
                    Explorar planes y precios
                  </a>
                </li>
                <li>¡Listo!</li>
              </ol>

              <a
                href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
                class="btn btn-primary mt-3"
                >Comenzar prueba gratis
              </a>
            </template>
          </pregunta-componente>
        </div>

        <div class="col-12">
          <pregunta-componente
            pregunta="¿Es posible importar clientes de manera masiva?"
            :muestra="false"
          >
            <template slot="respuesta">
              ¡Sí, es completamente posible importar clientes de manera masiva
              en easySocio! Puedes hacerlo de manera conveniente utilizando una
              planilla Excel. Entendemos que cambiar de sistema puede ser un
              proceso significativo, pero queremos asegurarte que estamos aquí
              para facilitar esa transición. Nuestro objetivo es hacer que la
              importación de clientes sea lo más sencilla y eficiente posible
              para que puedas disfrutar rápidamente de todas las ventajas que
              easySocio tiene para ofrecer. ¡Estamos listos para ayudarte en
              cada paso del camino!.</template
            >
          </pregunta-componente>
        </div>

        <div class="col-12">
          <pregunta-componente
            pregunta="¿Es posible integrar easySocio con equipos biométricos, torniquetes y molinetes?"
            :muestra="false"
          >
            <template slot="respuesta">
              <p>
                En la actualidad, hemos establecido integraciones exitosas con
                una amplia variedad de equipos de reconocimiento facial, cuya
                lista completa puedes consultar en la sección de control de
                acceso de nuestro sitio web:
                <a href="https://gestionsocios.com.uy/" target="_blank"
                  >https://gestionsocios.com.uy/</a
                >.
              </p>

              <p>
                Además de los costos asociados a la adquisición del hardware en
                tu país, la integración con el dispositivo de reconocimiento
                facial conlleva dos cargos adicionales*:
              </p>

              <ul>
                <li>
                  Costo fijo de configuración inicial: Este cargo varía y es
                  específico para cada proyecto.
                </li>
                <li>
                  Costo mensual adicional: Este monto se suma al costo de tu
                  plan contratado en EasySocio.
                </li>
              </ul>

              <p>
                En cuanto a la conectividad con otros dispositivos, como puertas
                magnéticas o molinetes, a menudo se requiere un controlador
                adicional. Te recomendamos buscar asesoramiento técnico por
                parte del proveedor de hardware local para facilitar esta
                integración.
              </p>

              <p>
                El proceso para iniciar la integración con EasySocio comienza
                con una investigación detallada del hardware disponible en tu
                país, tanto para el lector de reconocimiento facial como para
                otros dispositivos complementarios.
              </p>

              <p>
                Si necesitas asistencia técnica o tienes preguntas adicionales,
                nuestro equipo de soporte está disponible para guiarte en cada
                paso del camino. Para obtener información precisa y una
                cotización adaptada a tus necesidades específicas, te invitamos
                a ponerte en contacto con nosotros para recibir asesoramiento
                personalizado.
              </p></template
            >
          </pregunta-componente>
        </div>

        <div class="col-12">
          <pregunta-componente pregunta="¿Me capacitan?" :muestra="false">
            <template slot="respuesta">
              ¡Por supuesto! Proporcionamos capacitación mediante video
              tutoriales, permitiéndote aprender a tu propio ritmo y de acuerdo
              a tu conveniencia. Además, estamos a tu disposición para responder
              tus preguntas y ofrecerte asistencia en línea. Nuestra prioridad
              es asegurarnos de que cuentes con el apoyo necesario en todo
              momento para que alcances el éxito con comodidad.</template
            >
          </pregunta-componente>
        </div>

        <div class="col-12">
          <pregunta-componente pregunta="¿Se hace contrato?" :muestra="false">
            <template slot="respuesta">
              No hay contratos complicados. EasySocio opera con un sistema de
              pago mensual. Si decides dejar de utilizar easySocio, simplemente
              dejas de abonar y ¡listo!
            </template>
          </pregunta-componente>
        </div>

        <div class="col-12">
          <pregunta-componente pregunta="¿Cómo se instala?" :muestra="false">
            <template slot="respuesta">
              <p>
                <b>No requiere instalación</b>.
                <span class="font-secondary helper-aumenta-texto">easy</span
                >socio está basado en la nube, lo que supone una ventaja clave.
                Esta característica no solo ahorra tiempo y dinero al eludir las
                complicadas instalaciones de software y el consiguiente soporte
                técnico, sino que también elimina la necesidad de adquirir y
                mantener costosos servidores. Al liberarte de las
                responsabilidades asociadas con actualizaciones de memoria,
                respaldos y la sustitución de equipos obsoletos, puedes
                centrarte plenamente en tu negocio sin preocuparte por los
                aspectos técnicos.
              </p>
              <p>
                Además, al estar en la nube,
                <span class="font-secondary helper-aumenta-texto">easy</span
                >socio garantiza una accesibilidad sin complicaciones,
                permitiéndote gestionar tu información desde cualquier lugar y
                dispositivo con conexión a Internet.
              </p>
            </template>
          </pregunta-componente>
        </div>

        <div class="col-12">
          <pregunta-componente
            pregunta="¿Qué se necesita para poder usar easysocio?"
            :muestra="false"
          >
            <template slot="respuesta">
              <p>
                Solo necesitas un dispositivo (pc, celular o notebook) que esté
                conectado a internet.
              </p>
            </template>
          </pregunta-componente>
        </div>
      </div>
    </div>
  </div>
</div>
</lazy-width-observer>