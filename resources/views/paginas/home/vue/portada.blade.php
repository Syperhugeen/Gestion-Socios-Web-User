


Vue.component('portada' ,
{


props:['titulo', 'descripcion','url','url_img_chica','url_img_grande','call_to_action','altura_portada','data_texto_variable','grandiente'],


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
<div
  class="w-100 d-flex flex-column align-items-center justify-content-center text-white"
  :style="{
    minHeight: 'calc(' +  altura_portada + 'svh - ' + headerAltura + 'px)',

    background: grandiente != null && typeof grandiente != 'undefined' ? grandiente : 'linear-gradient(180deg, rgba(144,28,28,1) 0%, rgba(255,90,95,1) 75%)'
  }"
>
  <div
    :style="{
    paddingTop: headerAltura + 'px'
  }"
  ></div>

  <div class="container py-5 position-relative">
    <div class="row mx-0 justify-content-center ">
      <div class="col-12 col-lg-8 ">
        <slot name="titulo"></slot>
      </div>
      <div class="col-12 col-lg-4">
        <slot name="descripcion"></slot>
      </div>
    </div>
  </div>
</div>

`


});
