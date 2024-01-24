<lazy-width-observer>
  @foreach($Planes as $Plan)
  <div class="col-6 col-lg-3 mt-2 mb-4 mb-lg-0">
    <div
      class="w-100 d-flex flex-column gap-24 align-items-center shadow-sm border border-light rounded-lg py-4 px-1 px-lg-2 overflow-hidden bg-light"
    >
      <header class="h2 mb-0 text-center text-color-black">
        <b>{{$Plan->name}}</b>
      </header>

      <ul
        class="p-2 h4 mb-0 background-gris-0 shadow-sm rounded-lg list-style-none"
      >
        <li class="h5 d-flex flex-column align-items-center mb-0 p-2 gap-6">
          <span class="text-color-primary mr-2">
            <i class="fas fa-users"></i>
          </span>

          <small>Hasta</small>

          <span class="h3 mb-0">
            <strong> {{$Plan->cantidad_socios}}</strong>
          </span>

          <small>soci@s</small>
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

        <div class="text-center w-100">
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

          <small class="text-center helper-fuente-pequeña px-3">
            No te pediremos que ingreses tarjeta de crédito.</small
          >
        </div>
      </div>
    </div>
  </div>
  @endforeach

  {{--*/ $lastPlan = $Planes[count($Planes) - 1]; /*--}}
  <div
    class="w-100 row mx-0 my-4 helper-fuente-pequeña p-3 rounded-lg bg-light gap-16 justify-content-center shadow-sm"
  >
    <div class="text-center w-100 font-wieght-bold">
      Aclaraciones sobre los precios
    </div>
    <div class="col-12 p-2 rounded background-gris-1 text-center">
      <small
        >Si tienes más de {{$lastPlan->cantidad_socios}} socios
        <a href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          >póngase en contacto con nosotros</a
        >
        para recibir una cotización.
      </small>
    </div>
    <div class="col-12 p-2 rounded background-gris-1 text-center">
      <small>
        La integración del control de acceso con un dispositivo de
        reconocimiento facial conlleva un costo adicional. La cotización
        incluirá un cargo inicial por configuración y conexión del hardware,
        además de un aumento sobre el valor del plan seleccionado. Para obtener
        más detalles y recibir una cotización personalizada, por favor,
        <a href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis"
          >póngase en contacto con nosotros</a
        >.
      </small>
    </div>
  </div>
</lazy-width-observer>
