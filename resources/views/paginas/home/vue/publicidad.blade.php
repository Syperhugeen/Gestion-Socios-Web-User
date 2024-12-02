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
  <div class="mb-4 d-flex flex-column shadow-sm">
    <a :href="url">
      <img v-lazy="url_img" :alt="titulo" class="img-fluid mb-4" />
    </a>
    <div class="d-flex flex-column gap-8 text-center align-items-center p-2">
      <div class="h4 my-0">@{{titulo}}</div>
      <p class="my-0">@{{descripcion}}</p>
      <a :href="url">
        <button class="btn btn-primary">
          @{{call_to_action}} <i class="fas fa-angle-double-right"></i>
        </button>
      </a>
    </div>   
  </div>
</lazy-width-observer>

































`,
});
