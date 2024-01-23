Vue.component("publicidad", {
  props: [
    "titulo",
    "descripcion",
    "url",
    "url_img_chica",
    "url_img_grande",
    "call_to_action",
  ],

  data: function () {
    return {};
  },

  watch: {},
  methods: {},
  computed: {
    url_img: function () {
      return this.$root.mostrar_para_celuar
        ? this.url_img_chica
        : this.url_img_grande;
    },
  },
  mounted: function mounted() {},
  template: `

<lazy-width-observer>
  <div class="mb-4 col-12 d-flex flex-column shadow-sm">
    <a :href="url">
      <img v-lazy="url_img" :alt="titulo" class="img-fluid mb-4" />
    </a>
    <div class="col-12 h4 mb-4">@{{titulo}}</div>
    <p class="col-12 mb-4">@{{descripcion}}</p>

    <a :href="url" class="col-12 mb-4">
      <div class="Boton-Fuente-Chica Boton-Primario-Relleno">
        @{{call_to_action}} <i class="fas fa-angle-double-right"></i>
      </div>
    </a>
  </div>
</lazy-width-observer>

































`,
});
