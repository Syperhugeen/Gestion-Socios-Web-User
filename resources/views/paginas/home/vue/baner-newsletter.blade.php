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
    };
  },

  watch: {},
  methods: {
    post:function(){

    }

  },
  computed: {

  },
  mounted: function mounted() {},
  template: `


<div  class=" col-12 d-flex flex-column  align-items-center shadow-sm py-3" style="background-color: #44e0d1;" >

        <div class="col-12 col-lg-8 h6 mb-3 text-white text-center">
            @{{titulo}}
        </div>


        <div :style="{ opacity: cargando ? '0.5' : '1', pointerEvents: cargando ? 'none':'auto' }"  class="d-flex flex-row align-items-center">
                <div class="input-group mb-3">
          <input type="text" v-model="email" class="form-control" placeholder="Tu email" aria-label="Tu email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button @click="post" class="btn btn-secondary" type="button">Enviar</button>
          </div>
        </div>
        </div>






</div>
`,
});
