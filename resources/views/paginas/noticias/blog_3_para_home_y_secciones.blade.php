<section class="site-section bg-light" id="blog-section">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5 position-relative">
        <h2 class="text-color-primary titulos-class text-center mb-5">Blog</h2>
      </div>
      @foreach($blogs as $Entidad)
        {{--*/ $Entidad  = $Entidad /*--}}
        {{--*/ $Route    = $Entidad->route /*--}}
        @include('admin.noticias.partes.lista')
     @endforeach
    </div>
  </div>
</section>