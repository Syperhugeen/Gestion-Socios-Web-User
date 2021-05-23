

Vue.component('publicidad' ,
{


props['titulo', 'descripcion','url','url_img_chica','url_img_grande','call_to_action'],


data:function(){
    return {
       cargando:false,


    }
},

watch:{




},
methods:{




},
computed:{
    url_img:function(){
      return  this.$root.mostrar_para_celuar ? this.url_img_chica : this.url_img_grande;
    }
},
mounted: function mounted (){



},
template:`

<div v-if="cargando"  class="w-100 d-flex flex-column align-items-center py-5">
          <div class="cssload-container ">
              <div class="cssload-tube-tunnel-color-3 "></div>
          </div>
        </div>
<div v-else class="mb-4 col-12 d-flex flex-column shadow-sm" >
    <a :href="url">
        <img v-lazy="url_img" :alt="titulo" class="img-fluid mb-4">
    </a>
        <div class="col-12 h4 mb-4">
            @{{titulo}}
        </div>
        <p class="mb-4 ">
            @{{descripcion}}
        </p>

        <a :href="url">
            <div class="Boton-Fuente-Chica Boton-Primario-Relleno">
               @{{call_to_action}}    <i class="fas fa-angle-double-right"></i>
            </div>
        </a>



</div>
































`


});
