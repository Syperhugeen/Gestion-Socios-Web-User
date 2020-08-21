Vue.component('paises' ,
{

 

data:function(){
    return {
         paises:{!! json_encode($Paises) !!},
         pais_seleccionado:{!! json_encode($Pais) !!},
         url_pad:'https://mauricio.mwebs.com.uy/get_easy_socio/',
         modal_id:'modal_paises_cambiar'


    }
}, 

watch:{ 

  

   
},
methods:{
    
},
computed:{
  pais_filtrado:function(){
   let paises_filtrado = this.paises.find( pais => pais.code === this.pais_seleccionado.Codigo_pais ); 

   return paises_filtrado;
  }
},
template:'
 <span>
   
       <img :src="pais_filtrado.url_img" class="pais-img-show" v-on:click="$root.abrirModal(modal_id)">
   

    <div class="modal fade" :id="modal_id" tabindex="+1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      
       <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title" id="myModalLabel">Cambiar de país</h4>
          <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fas fa-times"></i>
            </span>
          </button>
          
        </div>
        <div class="modal-body text-center"> 
         
                 <div v-for="pais in paises">
                   <a :href="url_pad+pais.name">
                     <img :src="pais.url_img" class="pais-img-show">
                   </a>
                 </div>
                 
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>        
        </div>
      </div>


    </div>
  </div>













</span>

'

}




);