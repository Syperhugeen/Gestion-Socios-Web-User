

Vue.component('simple-card' ,
{


props:['titulo', 'descripcion','url','url_img_chica','url_img_grande','call_to_action'],


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

},
mounted: function mounted (){



},
template:`

<div v-if="cargando"  class="w-100 d-flex flex-column align-items-center py-5">
    <div class="cssload-container ">
        <div class="cssload-tube-tunnel-color-3 "></div>
    </div>
</div>
<div v-else class="w-100 h-100 d-flex flex-column shadow rounded p-4" >
<a :href="url" >
    <slot name="icono">

    </slot>
    </a>

    <a :href="url" >
    <h3 class="h5 mt-2 text-dark"> <strong>@{{titulo}}</strong> </h3>
    </a>


    <div class="color-text-gris">
        <slot name="description">

        </slot>

    </div>



    <div class="mt-4"  v-if="call_to_action">
        <a :href="url" class="btn btn-outline-info">@{{call_to_action}}</a>
    </div>




</div>


`


});
