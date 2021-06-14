
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

  <div class="container py-5 my-3">
    <h1 class="text-white mb-5">
        Software para gestionar gimnasios o  <slider-text :data="data_texto_variable"></slider-text>
    </h1>
    <ul class="mb-5">

     <li class="text-white espacio-letras"> Manejo de mebresías <span class="font-secondary helper-aumenta-texto"> easy </span></li>
     <li class="text-white espacio-letras"> Finanzas <span class="font-secondary helper-aumenta-texto"> easy </span></li>
     <li class="text-white espacio-letras"> Reservas online de clases <span class="font-secondary helper-aumenta-texto"> easy </span></li>
     <li class="text-white espacio-letras"> Control de acceso <span class="font-secondary helper-aumenta-texto"> easy </span></li>
    </ul>


    <a href="#intro" class="btn btn-success mr-2 cursor-pointer text-white"> Comenzar ahora</a>
    <a href="#intro" class="btn  btn-outline-primary cursor-pointer"> Seguir leyendo</a>

  </div>







</div>


`


});
