

@foreach($Planes as $Plan)
<div class="col-6 col-lg-3 mt-2 mb-4 mb-lg-0 px-1 px-lg-3">


<div class="w-100 d-flex flex-column align-items-center shadow border rounded py-4 px-3">
         <header class="sub-titulos-class mb-4 text-center text-color-black">
            <b>Plan {{$Plan->name}}</b>
          </header>

        <ul class="p-2 mb-3 background-gris-0 list-style-none">
             <li class="contiene-li-precio-nuevo d-flex flex-row">
              <span class="text-color-primary mr-2">
                <i class="fas fa-check-circle"></i>
              </span>
              <span>
                Gestión de membresías a socios
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
              Hasta <strong> {{$Plan->cantidad_socios}}</strong>  socios
              </span>

             </li>
             <li class="contiene-li-precio-nuevo d-flex flex-row">
              <span class="text-color-primary mr-2">
                <i class="fas fa-check-circle"></i>
              </span>
              <span>
               {{$Plan->cantidad_sucursales}} @if($Plan->cantidad_sucursales > 1)sucursales @else sucursal @endif
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
                <small class="color-text-gris">Notificaciones por email.
                </small>

              </span>

             </li>

             @if ($Plan->control_acceso == 'si')

              <li class="contiene-li-precio-nuevo border d-flex flex-row border-success">
                <span class="text-color-primary mr-2">
                  <i class="fas fa-check-circle"></i>
                </span>
                <span>
                  <b> Control de acceso </b>
                </span>
              </li>

             @endif

             @if ($Plan->reserva_de_clases_on_line == 'si')

              <li class="contiene-li-precio-nuevo border d-flex flex-row border-success ">
                <span class="text-color-primary mr-2">
                  <i class="fas fa-check-circle"></i>
                </span>
                <span>
                  <div>
                  <b> Reservas  online </b>
                  </div>
                <div>
                  <small>Tus socios podrán reservas online tus clases</small>

                </div>

                </span>
              </li>

              @endif





         </ul>

          <div class="contiene-precios-precios mb-1">
            <div class="contiene-precio-dato">


            @if(Auth::guest())
            <img class="shadow-sm mr-2 rounded-circle border border-light" height="40" width="40" src="{{url()}}/imagenes/monedas/{{  Session::get('esDeUruguay') ? 'pesos.jpg' : 'dolar.jpg'}}" alt="Moneda">

            {{  Session::get('esDeUruguay') ?  $Plan->moneda : 'USD' }} <strong>   {{  Session::get('esDeUruguay') ?  (int) $Plan->valor : (int) $Plan->valor_fuera_de_uruguay }}  </strong> / mes</div>
            @else

            <div>
            <img class="shadow-sm mr-2 rounded-circle border border-light" height="40" width="40" src="{{url()}}/imagenes/monedas/pesos.jpg" alt="Moneda">

            $ <strong>   {{  (int) $Plan->valor }}  </strong> / mes

            </div>

            <div>
            <img class="shadow-sm mr-2 rounded-circle border border-light" height="40" width="40" src="{{url()}}/imagenes/monedas/dolar.jpg" alt="Moneda">

            U$S <strong>   {{  (int) $Plan->valor_fuera_de_uruguay }}  </strong> / mes

            </div>

          </div>


            @endif
          </div>

           @if( Session::get('esDeUruguay'))
           <p class="text-center color-text-gris mb-0">
              <small>
                El precio está en pesos Uruguayos y no incluye IVA. <br>

                Forma de pago: depósito o transferencia del BROU (Se puede hacer en abitab o Red Pagos)

              </small>

           </p>

          @else
          <p class="text-center color-text-gris mb-0">
              <small>
                Precio en dólares americanos. <br>

                Forma de pago: PayPal.

              </small>

           </p>

          @endif





          <a class="Boton-Primario-Relleno Boton-Fuente-Chica mt-3" href="https://app.gestionsocios.com.uy/comenzar-a-probar-gratis" >
           Contactar
          </a>

</div>
</div>
@endforeach
