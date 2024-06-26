

@extends('layouts.admin_layout.admin_layout')

@section('miga-de-pan') 
 <h1 class="titulos-class  text-color-primary font-secondary">{{$Titulo}}</h1>
@stop

@section('content')

 {{-- titulo --}}
 <div class="container">
  <div class="row  p-3 justify-content-between ">
   


    <div class="col-6 col-lg-4"> 
     @if(Auth::user()->role == 'adminMcos522')
       <a class="col-12 Boton-Fuente-Chica Boton-Primario-Relleno" href="{{route($Route_crear)}}"> 
        Crear       
       </a>  
     @endif
    </div>
    
    @include('admin.'. $Carpeta_view_admin . '.partes.buscador')
   </div>
 </div>
 <div class="container p-4">
   <div class="row col-12">
     @foreach($Entidades as $Entidad)
          
          {{--*/ $Mostrar_admin  = true /*--}}
          {{--*/ $Entidad        = $Entidad /*--}}
          {{--*/ $Route          = $Entidad->route_admin /*--}}
          @include('admin.'. $Carpeta_view_admin . '.partes.lista_sin_imagen')
     @endforeach
   </div>
   <div>
     {!! $Entidades->appends(Request::all())->render() !!}
   </div>
 </div>
  
@stop