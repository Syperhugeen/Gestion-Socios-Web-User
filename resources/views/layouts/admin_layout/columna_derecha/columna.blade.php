<div class="admin-columna-contenedor">

 {{-- imagen logo --}}
 <a href="{{route('get_home')}}" class="p-5 titulos-class">

  @if(file_exists($Empresa->_path_img_logo_horizontal))
  <img class="admin-header-logo" src="{{$Empresa->img_logo_cuadrado}}">
  
  @else
  <i class="fas fa-code"></i>
  @endif


 </a>

 <ul>
   @if(Auth::user()->role === 'adminMcos522')
   <div id="admin-col-superadmin">
        <a href="{{route('get_datos_home_web')}}">
            <li class="admin-columna-li mi-float-right"><i class="fas fa-igloo"></i> Admin Panel</li>
        </a> 
        <a href="{{route('get_admin_users')}}">
          <li class="admin-columna-li mi-float-right"><i class="fas fa-user"></i> Usuarios</li>
        </a>
      


         

        

        
        
    </div>
   @endif

   <div id="admin-col-admin">
        <a href="{{route('get_datos_corporativos')}}">
            <li class="admin-columna-li mi-float-right">Mis datos</li>
        </a>  

        <a href="{{route('get_admin_noticias')}}">
          <li class="admin-columna-li mi-float-right"> Blog Easy Locales</li>
        </a>   
        <a href="{{route('get_admin_noticias_easy_externa')}}">
          <li class="admin-columna-li mi-float-right"> Blog Easy Externa</li>
        </a> 
         <a href="{{route('get_admin_portadas_de_paginas')}}">
          <li class="admin-columna-li mi-float-right"> Portadas de páginas</li>
        </a>   
        
    </div>

</ul>


    
</div>