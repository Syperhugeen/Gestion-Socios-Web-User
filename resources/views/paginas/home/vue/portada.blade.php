
@include('paginas.home.vue.slider-text')

Vue.component('portada' ,
{


props:['titulo', 'descripcion','url','url_img_chica','url_img_grande','call_to_action','altura_portada','data_texto_variable'],


data:function(){
    return {
       cargando:false,
       headerAltura:50


    }
},

watch:{




},
methods:{




},
computed:{

},
mounted: function mounted (){


    this.headerAltura = document.getElementById('headerID').clientHeight;


},
template:`

<div  class="w-100 "  :style="{
    minHeight: altura_portada + 'vh',
    background:'rgb(144,28,28)',
    background: 'linear-gradient(180deg, rgba(144,28,28,1) 0%, rgba(255,90,95,1) 75%)'
  }">

  <div :style="{
    paddingTop: headerAltura + 'px'
  }">
  </div>

  <div class="container py-5">
    <h1 class="text-white">
        Software para gestionar gimnasios o  <slider-text :data="data_texto_variable"></slider-text>
    </h1>

  </div>







</div>


`


});
