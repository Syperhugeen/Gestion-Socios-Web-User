<div v-else class="section-title text-center mb-5" :class="classTextColor">
  <div  class="d-flex flex-column align-items-center mb-4" >
      <div class="color-text-success titulos-class text-center ">
          <i class="fas fa-check-circle"></i>
      </div>                        
  </div>   
  <h2 class="section-title text-center mb-5" :class="classTextColor" >@{{mensaje_se_envio}}</h2>
  <a href="{{route('get_home')}}" class="Boton-Fuente-Chica Boton-Primario-Relleno mb-4 mt-4">Seguir explorando EasySocio</a>
</div>