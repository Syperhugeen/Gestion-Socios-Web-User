Vue.component("slider-text", {
  props: ["data"],

  data: function () {
    return {
      cargando: false,
      textMostrando: this.data[0],
      transitionShow: true,
      idInterval: "",
      idTimeOut: "",
    };
  },

  watch: {},

  methods: {
    cambiarTexto: function () {
      let cantidad = this.data.length;
      let position = 0;

      let vue = this;

      vue.idInterval = setInterval(() => {
        if (position < cantidad - 1) {
          position = position + 1;
        } else {
          position = 0;
        }

        vue.transitionShow = false;

        setTimeout(() => {
          vue.transitionShow = true;
          vue.textMostrando = vue.data[position];
        }, 700);
      }, 4000);
    },
  },
  computed: {},
  mounted: function mounted() {
    this.cambiarTexto();
  },
  created() {
    let vue = this;

    document.addEventListener(
      "visibilitychange",
      function () {
        console.log("tab ", document.visibilityState);
        if (document.visibilityState === "visible") {
          vue.cambiarTexto();
        } else {
          if (vue.idInterval != "") {
            clearInterval(vue.idInterval);
          }
        }
      },
      false
    );

    
  },
  destroyed() {
    let vue = this;
    if (vue.idInterval != "") {
      clearInterval(vue.idInterval);
    }
  },
  template: `

<div  class="w-100" >


<transition v-if="transitionShow" name="slide-fade">

        <span v-if="textMostrando.url">
            <a   :href="textMostrando.url">@{{textMostrando.name}}</a>
        </span>
        <span  v-else>
            @{{textMostrando.name}}
        </span>



</transition>






</div>


`,
});
