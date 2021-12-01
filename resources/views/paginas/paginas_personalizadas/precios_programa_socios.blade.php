@foreach($Planes as $Plan)
<div class="col-6 col-lg-3 mt-2 mb-4 mb-lg-0 px-1 px-lg-2">
  <div
    class="w-100 d-flex flex-column align-items-center shadow border rounded py-4 px-3"
  >
    <header class="sub-titulos-class mb-4 mt-3 text-center text-color-black">
      <b>Plan {{$Plan->name}}</b>
    </header>

    <ul class="p-2 mb-3 background-gris-0 list-style-none">
      <li class="contiene-li-precio-nuevo d-flex flex-row">
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          Gestión de membresías
          <span class="font-secondary helper-aumenta-texto"> easy </span>
        </span>
      </li>
      <li class="contiene-li-precio-nuevo d-flex flex-row">
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          Finanzas
        </span>
      </li>
      <li class="contiene-li-precio-nuevo d-flex flex-row">
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          Analíticas
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
        <span>
          Hasta <strong> {{$Plan->cantidad_socios}}</strong> socios
        </span>
      </li>
      <li class="contiene-li-precio-nuevo d-flex flex-row">
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          {{$Plan->cantidad_sucursales}} @if($Plan->cantidad_sucursales >
          1)sucursales @else sucursal @endif
        </span>
      </li>

      <li class="contiene-li-precio-nuevo border border-info d-flex flex-row">
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            Avisos automáticos
          </div>
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
              <span class="font-secondary helper-aumenta-texto"> easy </span>
              ¿no?. Además te guardamos todo el historial de accesos.</small
            >
          </div>
        </span>
      </li>

      @endif @if ($Plan->reserva_de_clases_on_line == 'si')

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success "
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Reservas online </b>
          </div>
          <div>
            <small>Tus socios podrán reservas online tus clases</small>
          </div>
        </span>
      </li>

      @endif @if ($Plan->rutina_dieta == 'si')

      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success "
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b> Rutinas y dietas </b>
          </div>
          <div>
            <small
              >Asignale a tus socios rutinas de entrenamientos o dietas de
              manera
              <span class="font-secondary helper-aumenta-texto"> easy </span>
            </small>
          </div>
        </span>
      </li>

      @endif
      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success "
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
              >Podrás monitorear la evolución del peso corporal (así como la de
              cualquier otro atributo) con el fin saber si se cumplió con el
              objetivo de tu cliente en un determinado período de tiempo.
              <span class="font-secondary helper-aumenta-texto"> easy </span>
            </small>
          </div>
        </span>
      </li>
      <li
        class="contiene-li-precio-nuevo border d-flex flex-row border-success "
      >
        <span class="text-color-primary mr-2">
          <i class="fas fa-check-circle"></i>
        </span>
        <span>
          <div>
            <b>
              Ranking de atletas
              <i style="color:gold;" class="fas fa-trophy"></i>
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
    </ul>

    <div class="contiene-precios-precios mb-1">
      @if(Auth::guest())
      <div class="contiene-precio-dato text-center">
        <img
          class="shadow-sm mr-2 rounded-circle border border-light"
          height="40"
          width="40"
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
          height="40"
          width="40"
          src="{{ url() }}/imagenes/monedas/pesos.jpg"
          alt="Moneda"
        />

        $ <strong> {{ (int) $Plan->valor }} </strong> / mes
      </div>

      <div class="mt-2 mb-2 text-center w-100">
        <img
          class="shadow-sm mr-2 rounded-circle border border-light"
          height="40"
          width="40"
          src="{{ url() }}/imagenes/monedas/dolar.jpg"
          alt="Moneda"
        />

        U$S <strong> {{ (int) $Plan->valor_fuera_de_uruguay }} </strong> / mes
      </div>

      @endif

      <p
        class="text-center color-text-gris mb-0 mt-2 "
        style="font-size: 12px !important;"
      >
        @if( Session::get('esDeUruguay'))

        <small>
          El precio está en pesos Uruguayos. <br />

          Forma de pago: depósito o transferencia del BROU (Se puede hacer en
          abitab o Red Pagos)
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
          class="btn btn-primary btn-lg mt-3"
          href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
        >
          Probar gratis
        </a>

        <small class="text-center px-3"
          >No te pediremos que ingreses tarjeta de crédito.</small
        >
      </div>
    </div>
  </div>
</div>
@endforeach
