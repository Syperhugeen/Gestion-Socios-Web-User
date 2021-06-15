@if(count($Planes) > 0)
      <section class="site-section background-gris-0" id="precios-section">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-5 position-relative">
                <p class="text-center text-uppercase">¿Cuánto cobramos? ¿Cómo se paga?</p>
              <h2 class=" text-center mb-5 h2">Planes y precios</h2>
            </div>
            @include('paginas.paginas_personalizadas.precios_programa_socios')
          </div>
        </div>
      </section>
    @endif
