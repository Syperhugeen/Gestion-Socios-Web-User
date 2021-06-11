Vue.component("slider-text", {
  props: ["data"],

  data: function() {
    return {
      cargando: false,
      textMostrando: this.data[0],
      transitionShow: true
    };
  },

  watch: {},
  methods: {
    cambiarTexto: function() {
      var cantidad = this.data.length;
      var position = 0;

      var vue = this;

      setInterval(() => {
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
    }
  },
  computed: {},
  mounted: function mounted() {
    this.cambiarTexto();
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


`
});
