<section class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <p class="text-center text-uppercase mb-1">Blog</p>
            <h3 class="  text-center h2 mb-2">Descubrí contenidos especializados para tu negocio</h3>
            <p class="  text-center mb-5">
              Artículos para aprender más y lograr que tu negocio sea exitoso
            </p>
          </div>
          @foreach($blogs as $Entidad)
            {{--*/ $Entidad  = $Entidad /*--}}
            {{--*/ $Route    = $Entidad->route /*--}}
            @include('admin.noticias.partes.lista')
         @endforeach
        </div>
      </div>
    </section>
