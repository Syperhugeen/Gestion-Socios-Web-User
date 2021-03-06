<footer class="site-section background-gris-4 ">
      <div class="container">


        
        <div class="row d-flex flex-row justify-content-center align-items-start">

          {{-- P r i m e r    b l o q u e   --}}
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5 ">@{{empresa.name}}</h3>
            <p  class="contiene-p-linea mb-3"><em>"La administración trata acerca de la gestión en el corto plazo, mientras se desarrollan los planes a largo plazo"</em>  Jack Welch. </p>    
            <p  class="contiene-p-linea mb-0"><em>"La administración es la eficiencia en escalar la ladera del éxito; el liderazgo determina si la ladera está apoyada en la pared correcta"</em> Stephen Covey.  </p>   

                 
          </div>

          {{-- S e g u n d o   B l o q u e     --}}  
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5">Rutas de interés</h3>
             
             
               
               @if(Auth::guest())
               <p class="contiene-p-linea">
                 <a class="contiene-link-linea" href="{{route('auth_login_get')}}" >Iniciar sesión</a>
               </p>
               @else
               <p class="contiene-p-linea">
                 <a class="contiene-link-linea" href="{{route('get_datos_corporativos')}}" >Administrar</a>
               </p>
               <p class="contiene-p-linea">
                 <a class="contiene-link-linea" href="{{route('logout')}}" >Salir</a>
               </p>
               @endif
            
          </div>   


          {{-- T e r c e r   B l o q u e     --}}  
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5">Datos de contacto</h3>
                             
              <p class="contiene-p-linea" v-if="se_muestra(empresa.telefono)"  > 
                 <i class="fas fa-phone-square mr-2 color-iconos-footer"></i>   @{{empresa.telefono}}
              </p>
              <p class="contiene-p-linea" v-if="se_muestra(empresa.celular)"   > 
                 <i class="fas fa-mobile-alt mr-2 color-iconos-footer"></i>     @{{empresa.celular}} 
              </p>
              <p class="contiene-p-linea" v-if="se_muestra(empresa.direccion)"  >
                 <i class="fas fa-map-marker-alt mr-2 color-iconos-footer"></i> @{{empresa.direccion}}
              </p>
              <p class="contiene-p-linea" v-if="se_muestra(empresa.horarios)"  > 
                 <i class="far fa-clock mr-2 color-iconos-footer"></i>          @{{empresa.horarios}}
              </p>
              <p class="contiene-p-linea" v-if="se_muestra(empresa.email)" >    
                 <a class="contiene-link-linea" href="{{route('get_pagina_contacto')}}"><i class="far fa-envelope color-iconos-footer mr-2"></i>       Contacto por email</a> 
              </p>
              <p class="contiene-p-linea" v-if="se_muestra(empresa.Whatsapp_cel)"> 
             <a class="contiene-link-linea" :href="empresa.link_whatsapp_send" >
               <i class="fab fa-whatsapp mr-2 color-iconos-footer"></i> Hablar con alguien de EasySocio por Whatsapp ahora mismo
             </a>
            </p>
            
          </div> 
        
               
             
          
          {{-- C u a r t o   B l o q u e     --}}
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5  text-bold">EasySocio</h3>

            <p  class="contiene-p-linea mb-3">
              <b>¿Qué es y cómo funciona EasySocio?</b>
Se trata del software, para administrar gimnasios, más fácil de usar que hayas conocido, y no por eso deja de ser una herramienta poderosa y totalmente funcional, ya que te ofrece todas las utilidades necesarias para que la gestión del local no se convierta en un dolor de cabeza o te consuma mucho tiempo y energía. <a href="{{route('get_home')}}">Explorar EasySocio</a></p>   

            <p class="contiene-p-linea" v-if="se_muestra(empresa.twitter_url)">
             <a class="contiene-link-linea" :href="empresa.twitter_url">
               <i class="fab fa-twitter-square mr-2 color-iconos-footer"></i> Twitter
             </a> 
            </p>
            <p class="contiene-p-linea" v-if="se_muestra(empresa.facebook_url)">
             <a class="contiene-link-linea" :href="empresa.facebook_url">
               <i class="fab fa-facebook-square mr-2 color-iconos-footer"></i> Facebook
             </a>
            </p>
            <p class="contiene-p-linea" v-if=" se_muestra(empresa.instagram_url)">
             <a class="contiene-link-linea" :href="empresa.instagram_url">
               <i class="fab fa-instagram mr-2 color-iconos-footer"></i> Instagram
             </a>
            </p>
            <p class="contiene-p-linea" v-if="se_muestra(empresa.youtube_url)">
             <a class="contiene-link-linea" :href="empresa.youtube_url">
               <i class="fab fa-youtube mr-2 color-iconos-footer"></i> Youtube
             </a>
            </p>
            <p class="contiene-p-linea" v-if="se_muestra(empresa.linkedin_url)">
             <a class="contiene-link-linea" :href="empresa.linkedin_url">
               <i class="fab fa-linkedin mr-2 color-iconos-footer"></i> Linkedin
             </a>
            </p>
            <p class="contiene-p-linea" v-if="se_muestra(empresa.Whatsapp_cel)"> 
             <a class="contiene-link-linea" :href="empresa.link_whatsapp_send" >
               <i class="fab fa-whatsapp mr-2 color-iconos-footer"></i> Whatsapp
             </a>
            </p>
          </div>
        </div>

        @yield('iconos-compartir')
       
      </div>
    </footer>

    <div class="p-5 background-black">
      <p class="m-0 text-center color-text-white parrafo-class"> 
        <small>
         <span class="color-text-white">Todos los derechos reservados <b class="text-color-primary">@{{empresa.name}}</b> © 2020</span> 

          <span v-if="mostrar_para_grande" class="text-color-primary"> | </span>
          <br v-else>

         <i class="fas fa-code"></i> <span class="color-text-gris">Desarrollado por</span>   
         <a class="color-text-white" href="https://mauricio.mwebs.com.uy/"> Mauricio Costanzo</a>
        </small>      
      </p>
    </div>