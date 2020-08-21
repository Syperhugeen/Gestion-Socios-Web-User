<div class="row">
  @foreach($blogs_relacionados as $blog)
    {{--*/ $Entidad  = $blog /*--}}
    {{--*/ $Route    = $Entidad->route /*--}}
    @include('admin.noticias.partes.lista')
  @endforeach
</div>