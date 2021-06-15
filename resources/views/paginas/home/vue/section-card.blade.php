

Vue.component('section-card' ,
{


props:['titulo', 'background','order','url_img_chica','url_img_grande','call_to_action'],


data:function(){
    return {
       cargando:false,
       showSection:false


    }
},

watch:{




},
methods:{




},
computed:{
    ordenTextClass:function(){
        return `${this.order == 'left' ? 'order-1 order-lg-1': 'order-1 order-lg-2 text-right'}`;
    },
    ordenImgClass:function(){
        return `${this.order == 'left' ? 'order-2  order-lg-2': 'order-2 order-lg-1'}`;
    }

},
mounted: function mounted (){



},
template:`


     <section  class="site-section" :class="background">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6"  :class="ordenTextClass">

            <h3 class="h3 mb-4"> @{{titulo}} </h3>

            <slot name="description-visible">

            </slot>

            <transition v-if="showSection" name="slide-fade">
                <slot name="description-oculta">

                </slot>
            </transition>

            <div @click="showSection = !showSection">
                <span v-if="!showSection">
                    Leer mas <i class="fas fa-chevron-down"></i>
                </span>

                <span v-else>
                    Leer menos <i class="fas fa-chevron-up"></i>
                </span>
            </div>





            </div>
            <div :class="ordenImgClass" v-lazy-container="{ selector: 'img' }" class="col-lg-6  pl-lg-5  d-flex flex-row align-items-center justify-content-center">
              <img class="img-fluid mb-4 helper-border-radius-16" data-src="{{url()}}/imagenes/PaginasPersonalizadas/Socios/estado-de-cuenta-de-programa-de-administracion-de-socio.jpg" alt="Este programa de administración tiene estado de cuenta incorporado, es decir, vas a poder saber en que han gastado tus socios y si están al día o no.">
            </div>
          </div>
        </div>
      </section>





`


});
