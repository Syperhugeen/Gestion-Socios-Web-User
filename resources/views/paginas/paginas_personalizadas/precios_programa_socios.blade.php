@foreach($Planes as $Plan)
<div class="col-6 col-lg-3 mt-2 mb-4 mb-lg-0 px-1 px-lg-2">
  <div
    class="w-100 d-flex flex-column align-items-center shadow-sm border border-light rounded-lg py-4 px-1 px-lg-2 overflow-hidden bg-light"
  >
    <header class="h5 mb-4 mt-3 text-center text-color-black">
      Plan <br />
      <b>{{$Plan->name}}</b>
    </header>

    <ul class="p-2 mb-3 background-gris-0 list-style-none">
      <li class="contiene-li-precio-nuevo d-flex flex-row">
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          Hasta <strong> {{$Plan->cantidad_socios}}</strong> socios
        </span>
      </li>

      <li class="contiene-li-precio-nuevo d-flex flex-row">
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        Soporte
      </li>

      <li class="contiene-li-precio-nuevo d-flex flex-row">
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        Capacitación (curso paso a paso).
      </li>

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Gestión de membresías</b>
          </div>
          <div>
            <small
              >Controlamos de manera automática el vencimiento de los planes
              (membresías) que le vendés a tus socios. Lo mismo que hacés a mano
              o en excel <strong>pero de manera automática</strong>
            </small>
          </div>
        </span>
      </li>
      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Control de inventario y ventas de productos</b>
          </div>
          <div>
            <small
              >Optimiza ventas y controla productos con soluciones intuitivas y potentes.
            </small>
          </div>
        </span>
      </li>

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Cuentas corrientes</b>
          </div>
          <div>
            <small>
              Te informamos sobre cuáles socios te deben y por qué.
              <strong
                >Además guardamos todo el historial de transacciones de cada
                socio.</strong
              >
            </small>
          </div>
        </span>
      </li>

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Finanzas 💰</b>
          </div>
          <div>
            <small
              >Registramos todas tus ventas así como tus gastos.
              <strong>Automatizamos la contabilidad de tu negocio.</strong>
              ¡Ólvidate de la planilla de excel!
            </small>
          </div>
        </span>
      </li>

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Analíticas 📈</b>
          </div>
          <div>
            <small
              >Reportes de ventas de membresías, ingresos y egresos de caja.
              Asistencia a clases, días y horarios más concurridos por los
              socios... y más!
            </small>
          </div>
        </span>
      </li>

      <li class="contiene-li-precio-nuevo border border-info d-flex flex-row">
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>Avisos automáticos</div>
          <small class="color-text-gris">Notificaciones por email. </small>
        </span>
      </li>

      @if ($Plan->control_acceso == 'si')

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Control de acceso </b>
          </div>
          <div>
            <small
              >Nosotros somos los que le decimos a tus socios que deben dinero.
              ¿<span class="font-secondary helper-aumenta-texto"> easy </span>
              no?. Además te guardamos todo el historial de accesos.</small
            >
          </div>
        </span>
      </li>

      @endif @if ($Plan->reserva_de_clases_on_line == 'si')

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Reservas online </b>
          </div>
          <div>
            <small>Tus socios podrán reservar online tus clases</small>
          </div>
        </span>
      </li>

      @endif @if ($Plan->rutina_dieta == 'si')

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Rutinas y dietas 🏋️‍♀️</b>
          </div>
          <div>
            <small
              >Asígnale a tus socios rutinas de entrenamientos o dietas de
              manera
              <span class="font-secondary helper-aumenta-texto"> easy </span>
            </small>
          </div>
        </span>
      </li>

      @endif
      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Seguimiento personalizado </b>
          </div>
          <div>
            <small
              >Podrás monitorear la evolución del peso corporal (entre otros)
              con el fin saber si se cumplió con el objetivo 🏁 de tu socio en
              un determinado período de tiempo.
              <span class="font-secondary helper-aumenta-texto"> easy </span>
            </small>
          </div>
        </span>
      </li>
      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b>
              Ranking de atletas
              <i style="color: gold" class="fas fa-trophy"></i>
            </b>
          </div>
          <div>
            <small
              >Te armamos un ranking de atletas según sus asistencias a clases y
              desempeño (si es que los evaluas).
              <span class="font-secondary helper-aumenta-texto"> easy </span>
            </small>
          </div>
        </span>
      </li>
      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Alerta de cumpleaños 🎂 </b>
          </div>
          <div>
            <small>
              Hacé sentir especiales a tus socios y prepará algo para
              homenajear. El ratio de fidelidad despegará 🚀 ¿<span
                class="font-secondary helper-aumenta-texto"
              >
                easy
              </span>
              no?
            </small>
          </div>
        </span>
      </li>

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Reviews ⭐⭐⭐⭐⭐ </b>
          </div>
          <div>
            <small>
              Obten puntuaciones y comentarios por parte de tus socios de forma
              automática, ¿<span class="font-secondary helper-aumenta-texto">
                easy
              </span>
              no?
            </small>
          </div>
        </span>
      </li>
      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success"
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Licencia y días que no se trabaja 😀</b>
          </div>
          <div>
            <small>
              Podrás indicar que días vas a cerrar, programar tus vacaciones y
              mucho más (No tendrás que reconfigurar tu calendarío) ¿<span
                class="font-secondary helper-aumenta-texto"
              >
                easy
              </span>
              no?
            </small>
          </div>
        </span>
      </li>
    </ul>

    <div class="contiene-precios-precios mb-1">
      @if(Auth::guest())
      <div class="contiene-precio-dato text-center">
        <img
          class="shadow-sm mr-2 rounded-circle border border-light"
          height="20"
          width="20"
          src="{{
            url()
          }}/imagenes/monedas/{{  Session::get('esDeUruguay') ? 'pesos.jpg' : 'dolar.jpg'}}"
          alt="Moneda"
        />

        {{ Session::get('esDeUruguay') ? $Plan->moneda : 'USD' }}
        <strong>
          {{ Session::get('esDeUruguay') ? (int) $Plan->valor : (int)
          $Plan->valor_fuera_de_uruguay }}
        </strong>
        / mes
      </div>
      @else

      <div class="text-center w-100">
        <img
          class="shadow-sm mr-2 rounded-circle border border-light"
          height="20"
          width="20"
          src="{{ url() }}/imagenes/monedas/pesos.jpg"
          alt="Moneda"
        />

        $ <strong> {{ (int) $Plan->valor }} </strong> / mes
      </div>

      <div class="mt-2 mb-2 text-center w-100">
        <img
          class="shadow-sm mr-2 rounded-circle border border-light"
          height="20"
          width="20"
          src="{{ url() }}/imagenes/monedas/dolar.jpg"
          alt="Moneda"
        />

        U$S <strong> {{ (int) $Plan->valor_fuera_de_uruguay }} </strong> / mes
      </div>

      @endif

      <p
        class="w-100 text-center color-text-gris mb-0 mt-2"
        style="font-size: 12px !important"
      >
        @if( Session::get('esDeUruguay'))

        <small>
          El precio está en pesos Uruguayos. (Precio sin impuestos) <br />

          Forma de pago: depósito o transferencia del BROU (Se puede hacer en
          abitab o Red Pagos).
        </small>

        @else

        <small>
          Precio en dólares americanos. <br />

          Forma de pago: PayPal.
        </small>

        @endif
      </p>

      <div class="w-100 d-flex flex-column align-items-center">
        <a
          class="btn btn-primary btn-lg mt-3 mb-1"
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
        >
          Probar gratis
        </a>

        <small class="text-center helper-fuente-pequeña px-3"
          >No te pediremos que ingreses tarjeta de crédito.</small
        >
      </div>
    </div>
  </div>
</div>
@endforeach

<div class="col-12 text-center my-5 helper-fuente-pequeña">
  <small
    >Si tienes más de 400 socios te cobraremos
    {{ Session::get('esDeUruguay') ? '$400' : 'USD 10' }} cada 100 registros
    nuevos. <br />
    Por ejemplo: <br />
    Si tienes 460 socios te cobraremos lo que cuesta el Plan Pro más
    {{ Session::get('esDeUruguay') ? '$400' : 'USD 10' }} . <br />
    Si tienes 550 socios te cobraremos lo que cuesta el Plan Pro más
    {{ Session::get('esDeUruguay') ? '$800' : 'USD 20' }}.
  </small>
</div>
