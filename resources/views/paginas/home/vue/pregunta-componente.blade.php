Vue.component('pregunta-componente' ,
{
props:['pregunta','muestra'], 

data:function(){
    return {               
        muestraRespuesta: false,
    }
}, 
mounted(){
    this.muestraRespuesta = this.muestra;
},
created() {
    
},
destroyed() {
    
},
methods:{

},
computed:{

},
template:`
<div class="w-100 p-3 mb-3 borde-gris background-white" >
    <div class="row mx-0 align-items-center cursor-pointer"  @click="muestraRespuesta = !muestraRespuesta">
        <div class="col-10">
            <h4 :class="{'text-color-primary':muestraRespuesta}">
                @{{pregunta}}
            </h4>
        </div>
        <div class="col-2 text-right">
            <small :class="{'text-color-primary':muestraRespuesta}">            
                <i v-if="muestraRespuesta" class="fas fa-chevron-down"></i>
                <i v-else class="fas fa-chevron-right"></i>
            </small>
        </div>
    </div>
    <div v-if="muestraRespuesta" class="w-100 borde-gris-top p-3  mt-3">
        <p class="mb-0 w-100">
            <slot name="respuesta"></slot>
        </p>
    </div>
</div>
`



});