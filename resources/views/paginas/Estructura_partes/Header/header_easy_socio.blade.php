<header-nav :scroll="true" color_tipo="simple" inline-template>
  <header class="py-4 " :class="getClassHeader" role="banner">

        <div class="container-fluid ">
          <div class="row align-items-center justify-content-between ">
            
            <div class="col-6 col-lg-2">
             <a href="{{route('get_home')}}" class="d-block w-100 p-3 p-lg-0">
               <img v-if="$root.scrolled > 0" src="{{url()}}/imagenes/Empresa/logo-rectangular-easysocio-color.png" class="img-fluid">
               <img v-else src="{{url()}}/imagenes/Empresa/logo-rectangular-easysocio-blanco.png" class="img-fluid">

             </a>
            </div> 

          

            
              <nav v-if="mostrar_opciones_del_menu" class="col-lg-8 d-flex flex-column align-items-end" role="navigation" :class="getClassMostrarMenuMovil">
                <ul :class="getClassNavUlEnMovil" class="d-flex flex-column align-items-start flex-lg-row align-items-lg-center m-0 px-lg-3">     
                  <div v-if="$root.mostrar_para_celuar"  v-on:click="set_mostrar_menu_movil" class="p-5 w-100 text-right "><i class="fas fa-times"></i>
                  </div>
                  <li class="header-nav-ul-li"><a :class="getClassItemsNav" href="{{route('get_home')}}" class="nav-link">Inicio</a></li>
                         
                  <li class="header-nav-ul-li"><a :class="getClassItemsNav" href="{{route('get_pagina_noticias_listado')}}" class="nav-link">Blog</a></li>
                  <li class="header-nav-ul-li"><a :class="getClassItemsNav" href="{{route('get_pagina_contacto','-')}}" class="nav-link">Contacto</a>
                  </li>
                  
                </ul>
              </nav> 
              <div v-if="$root.mostrar_para_celuar" v-on:click="set_mostrar_menu_movil" class="col-3 text-right titulos-class" :class="getClassColorElement">
                 <i v-if="!mostrar_menu_en_movil" class="fas fa-bars"></i>
                 
              </div>

          </div>
        </div>      
  </header>
</header-nav>

{{-- <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{route('get_home')}}" class="nav-link">Inicio</a></li>
                <li><a href="#precios-section" class="nav-link">Precios</a></li>
                <li><a href="{{route('get_pagina_contacto_easy')}}" class="nav-link">Contacto</a></li>
                
              </ul>
            </nav>
          </div>

        

          <div class="text-left">

            


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right">
              <i class="fas fa-bars  text-white h3"></i></a>
              
            </div>

          </div>

        </div>
      </div>
      
</header> --}}