Vue.component("contacto-component", {
  props: ["empresa", "color"],
  data: function () {
    return {
      data_mensaje: {
        name: "",
        email: "",
        mensaje: "",
        presupuesto: "",
        que_vendes: "",
        pais: "",
        que_necesitas: [],
        tipo_consulta_de_easy: "",
        tipo_de_negocio: "",

        cantidad_de_clientes: "",
        funciones: [],
        celular: "",
        nombre_empresa: "",
        Logo_url:
          "https://gestionsocios.com.uy/imagenes/Empresa/logo-rectangular-easy-socio-grande.png",
        Logo_url_blanco:
          "https://gestionsocios.com.uy/imagenes/Empresa/logo-rectangular-easysocio-blanco.png",
      },

      cantidadDeClientes: [
        "Menos de 100",
        "Entre 100 y 200",
        "Entre 200 y 300",
        "Entre 300 y 400",
        "Más de 400",
      ],
      tipoDeNegocios: [
        "Gimnasio",
        "Box crossfit",
        "Box funcional",
        "Escuela de danzas",
        "Escuela de artes marciales",
        "Otro tipo de negocio",
      ],
      funciones: [
        {
          name: "Gestión de mebresías",
          description: "",
        },
        {
          name: "Finanzas",
          description: "",
        },
        {
          name: "Analíticas",
          description: "",
        },

        {
          name: "Reservas online",
          description:
            "¿Tus clases tienen cupos limitados? ¿Necesitás que tus clientes se agenden previamente?",
        },
        {
          name: "Control de acceso",
          description: "",
        },
      ],

      se_envio: false,
      mensaje_se_envio: "",
      errores: false,
      cargando: false,
      textos: {
        ProbarEasy: "Para comenzar la prueba gratuita de 30 días",
        ConsultarEasy: "Quiero hacer una consulta",
      },
    };
  },

  methods: {
    enviarMensaje: function () {
      var data = this.data_mensaje;

      var url = "/post_contacto_form";
      var vue = this;

      this.cargando = true;

      axios
        .post(url, data)
        .then(function (response) {
          var data = response.data;

          if (data.Validacion == true) {
            gtag("event", "contacto");
            vue.se_envio = true;
            vue.mensaje_se_envio = data.Validacion_mensaje;

            vue.cargando = false;
          } else {
            vue.cargando = false;

            vue.errores = data.Errores;
          }
        })
        .catch(function (error) {
          $.notify(error, "error");
          vue.cargando = false;
        });
    },
  },
  computed: {
    classImput: function () {
      return {
        "input-text-class-primary": this.color == "input_color_primary",
        "input-text-class-white": this.color == "input_color_white",
      };
    },
    classBoton: function () {
      return {
        "Boton-Fuente-Chica": true,
        "Boton-Primario-Relleno": this.color == "input_color_primary",
        "Boton-Blanco": this.color == "input_color_white",
        "Boton-Disable": !this.se_puede_enviar,
      };
    },
    classTextColor: function () {
      return {
        "text-primary": this.color == "input_color_primary",
        "text-white": this.color == "input_color_white",
      };
    },
    classCargadorColor: function () {
      return {
        cargador_white: this.color == "input_color_white",
      };
    },
    se_puede_enviar: function () {
      if (this.data_mensaje.name != "" && this.data_mensaje.email != "") {
        return true;
      } else {
        return false;
      }
    },
    mostrar_si_se_contacta_por_easy_probar: function () {
      if (this.data_mensaje.tipo_consulta_de_easy == this.textos.ProbarEasy) {
        return true;
      }
    },
    mostrar_si_se_contacta_para_consultar_easy: function () {
      if (
        this.data_mensaje.tipo_consulta_de_easy == this.textos.ConsultarEasy
      ) {
        return true;
      }
    },
  },
});
