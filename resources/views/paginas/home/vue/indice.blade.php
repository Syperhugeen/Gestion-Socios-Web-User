

Vue.component('indice' ,
{





data:function(){
    return {
       cargando:false,
       indice:[]

    }
},

watch:{




},
methods:{


    crearIndice:function(){
        this.cargando = true;
        let elementos = document.querySelectorAll('.post-individual-section-titulo,.post-individual-section-sub-titulo, .contenedor-blog h3, .contenedor-blog h4');

        for (var prop in elementos) {

                elementos[prop].id =  elementos[prop].outerText;

                if( elementos[prop].outerText != undefined)
                {
                    this.indice.push({
                    name:  elementos[prop].outerText,
                    url: '#'+elementos[prop].id
                  });
                }




        }



        this.cargando = false;

    },


},
computed:{

},
mounted: function mounted (){
    this.crearIndice();


},
template:`

<div v-if="cargando"  class="w-100 d-flex flex-column align-items-center py-5">
          <div class="cssload-container ">
              <div class="cssload-tube-tunnel-color-3 "></div>
          </div>
        </div>
<div v-else class="mb-4 col-12 d-flex flex-column " >
           <ul class="p-3  borde-primary background-gris--1">
               <div class="mb-2">
                    <b>Índice del contenido:</b>

               </div>
            <li class="mb-2 ml-4" v-for="data in indice" :key="data.name"> <a :href="data.url"> @{{data.name}}</a></li>
           </ul>
</div>
































`


});
