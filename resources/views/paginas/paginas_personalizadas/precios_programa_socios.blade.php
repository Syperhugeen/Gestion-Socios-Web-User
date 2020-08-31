

@foreach($Planes as $Plan)
<div class="col-12 col-lg-4 mb-lg-3">
  

<div class="w-100 d-flex flex-column align-items-center background-gris--1 py-4 px-3">
         <header class="sub-titulos-class mb-4 text-center text-color-black">
            <b>Plan {{$Plan->name}}</b> 
          </header>

        <ul class="p-3 mb-3 background-gris-0 list-style-none">
             <li class="contiene-li-precio-nuevo">
              <span class="text-color-primary">
                <i class="fas fa-check-circle"></i>
              </span>              
              Úsalo en las computadoras que quieras
             </li>             
             <li class="contiene-li-precio-nuevo">
              <span class="text-color-primary">
                <i class="fas fa-check-circle"></i>
              </span>              
              Cuentas corrientes
             </li>
             <li class="contiene-li-precio-nuevo">
              <span class="text-color-primary">
                <i class="fas fa-check-circle"></i>
              </span>              
              Movimientos de caja
             </li>
              <li class="contiene-li-precio-nuevo">
              <span class="text-color-primary">
                <i class="fas fa-check-circle"></i>
              </span>              
              Capacitación 
             </li>
             <li class="contiene-li-precio-nuevo">
              <span class="text-color-primary">
                <i class="fas fa-check-circle"></i>
              </span>              
              Soporte
             </li>
             <li class="contiene-li-precio-nuevo">
              <span class="text-color-primary">
                <i class="fas fa-check-circle"></i>
              </span>              
              Hasta <strong> {{$Plan->cantidad_de_socios}}</strong>  socios
             </li>
             <li class="contiene-li-precio-nuevo">
              <span class="text-color-primary">
                <i class="fas fa-check-circle"></i>
              </span>         

               {{$Plan->cantidad_de_sucursales}} @if($Plan->cantidad_de_sucursales > 1)sucursales @else sucursal @endif
             </li>
             
          
         </ul>

          <div class="contiene-precios-precios">
            <div class="contiene-precio-dato"> Precio: {{$Plan->moneda}} <strong> {{$Plan->precio}}</strong> / mes</div> 
          </div>



          
             
          <a class="Boton-Primario-Relleno Boton-Fuente-Chica mt-3" href="{{$Empresa->link_whatsapp_send}}" target="_blank">
            <small>Hablar con alguien por más información</small> 
          </a>     
          
</div>
</div>
@endforeach

