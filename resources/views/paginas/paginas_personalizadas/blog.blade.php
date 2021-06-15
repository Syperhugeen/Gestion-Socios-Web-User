<section class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <p class="text-center text-uppercase mb-1">Blog</p>
            <h3 class="  text-center h2 mb-5">Descubrí contenidos especializados para que tener éxito sea <span class="font-secondary helper-aumenta-texto"> easy </span></h3>

          </div>
          @foreach($blogs as $Entidad)
            {{--*/ $Entidad  = $Entidad /*--}}
            {{--*/ $Route    = $Entidad->route /*--}}
            @include('admin.noticias.partes.lista')
         @endforeach
        </div>
      </div>
    </section>
