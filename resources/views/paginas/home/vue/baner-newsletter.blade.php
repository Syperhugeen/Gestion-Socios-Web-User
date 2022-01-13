Vue.component("baner-newsletter", {
  props: [
    "titulo",
    "descripcion",
    "url",
    "url_img_chica",
    "url_img_grande",
    "call_to_action",
  ],

  data: function () {
    return {
      cargando: false,
      yaSeRegistro: false,
      email: "",
      mensajeDeError:''
    };
  },

  watch: {},
  methods: {
    post: function () {

      this.mensajeDeError = '';
      let data = {email:this.email};
      let url  = "/post_nuevo_newsletter";
      let vue  = this;

      this.cargando = true;

      axios
        .post(url, data)
        .then(function (response) {
          let data = response.data;

          if (data.Validacion == true) {   

            vue.yaSeRegistro     = true;            
            vue.cargando         = false;
            $.notify(data.Validacion_mensaje, "success");

          } else {
            vue.cargando = false;             
            vue.mensajeDeError = `${data.Validacion_mensaje} ${data.Data.email[0]}`;           
          }
        })
        .catch(function (error) {
          
          vue.cargando = false;
        });
    },
  },
  computed: {},
  mounted: function mounted() {},
  template: `


<div  v-if="!yaSeRegistro" class=" col-12 d-flex flex-column  align-items-center shadow-sm py-4 py-lg-5" style="background-color: #44e0d1;" >
  <div class="col-12 col-lg-7 h5 mb-4 text-white text-center">
      @{{titulo}}
  </div>
  <div :style="{ opacity: cargando ? '0.5' : '1', pointerEvents: cargando ? 'none':'auto' }"  class="d-flex flex-row align-items-center">
    <div class="input-group mb-3">
      <input type="text" v-model="email" class="form-control" placeholder="Tu email" aria-label="Tu email" >
      <div class="input-group-append">
        <button @click="post" class="btn btn-secondary" type="button">Enviar</button>
      </div>
    </div>
    
  </div>
  <div v-if="mensajeDeError != ''" class="col-10 text-center mt-2" style="font-size:10px;">@{{mensajeDeError}}</div>
</div>
<div v-else class="col-12 d-flex flex-column  align-items-center shadow-sm py-4 background-gris--1" >
    <div class="col-12 col-lg-7 color-text-success titulos-class text-center mb-4">
        <i class="fas fa-check-circle"></i>
    </div>
    <p class=" col-12 col-lg-7 text-center sub-titulos-class">
        ¡Gracias!
    </p>
    <p class="col-12 col-lg-7 text-center mb-0">
      Semana tras semanas te enviaremos a tu email nuevos contenidos para que emprender (en fitness) sea cosa easy.
    </p>
</div>
`,
});
