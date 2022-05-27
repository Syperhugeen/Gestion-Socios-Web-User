Vue.component("section-card", {
  props: [
    "titulo",
    "titulo_aclarador",
    "background",
    "order",
    "url_img_chica",
    "url_img_grande",
    "call_to_action",
    "con_parte_oculta",
    "video",
    "video_type"
  ],

  data: function() {
    return {
      cargando: false,
      showSection: false
    };
  },

  watch: {},
  methods: {},
  computed: {
    ordenTextClass: function() {
      return `${
        this.order == "left"
          ? "order-1 order-lg-1"
          : "order-1 order-lg-2 "
      }`;
    },
    ordenImgClass: function() {
      return `${
        this.order == "left" ? "order-2  order-lg-2" : "order-2 order-lg-1"
      }`;
    }
  },
  mounted: function mounted() {},
  template: `


     <section  class="py-5" :class="background">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6"  :class="ordenTextClass">

            <p class="text-uppercase mb-1" v-if="titulo_aclarador != ''">
                <small>@{{titulo_aclarador}}</small>
            </p>
            <h3 v-if="titulo != ''" class="h3 mb-4"> @{{titulo}} </h3>

            <slot name="description-visible">

            </slot>

            <transition v-if="showSection" name="slide-fade">
                <slot name="description-oculta">

                </slot>
            </transition>

            <div v-if="con_parte_oculta" class="cursor-pointer" @click="showSection = !showSection">
                <span v-if="!showSection">
                    Leer mas <i class="fas fa-chevron-down"></i>
                </span>

                <span v-else>
                    Leer menos <i class="fas fa-chevron-up"></i>
                </span>
            </div>





            </div>
            <div :class="ordenImgClass"  class="col-lg-6  p-2 p-lg-5  d-flex flex-row align-items-center justify-content-center">
            <video v-if="video == 'si'" muted autoplay loop class="img-fluid" >
           <source :src="url_img_chica" :type="video_type">
      Your browser does not support the video tag.
    </video>
              <img v-else class="img-fluid  helper-border-radius-16" :src="$root.mostrar_para_celuar ? url_img_chica : url_img_grande" :alt="titulo">
            </div>
          </div>
        </div>
      </section>





`
});
