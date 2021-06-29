<div v-if="!se_envio" class="container">
  <div class="row mb-4">
    <p class="col-12 text-bold mb-4">
      <i class="far fa-user"></i> Hablanos de vos
    </p>

    <div class="col-lg-6">
      <fieldset class="float-label mb-0">
        <input
          name="Tu nombre"
          type="text"
          class="input-text-class-primary"
          v-model="data_mensaje.name"
          required
        />
        <label for="Tu nombre">Tu nombre</label>
      </fieldset>
      <div class="mb-2">
        <small>*Obligatorio </small>
      </div>
    </div>

    <div class="col-lg-6">
      <fieldset class="float-label mb-0">
        <input
          name="Tu email"
          type="text"
          class="input-text-class-primary"
          v-model="data_mensaje.email"
          required
        />
        <label for="Tu email">Tu email</label>
      </fieldset>
      <div class="mb-2">
        <small>*Obligatorio </small>
      </div>
    </div>

    <div class="col-lg-6">
      <fieldset class="float-label mb-0">
        <input
          name="Tu celular"
          type="number"
          class="input-text-class-primary"
          v-model="data_mensaje.celular"
          required
        />
        <label for="Tu email">Tu celular</label>
      </fieldset>
      <div class="mb-2">
        <small
          >*Obligatorio @if( !Session::get('esDeUruguay')) Agregar código
          internacional @endif</small
        >
      </div>
    </div>

    <div class="col-lg-6">
      <fieldset class="float-label mb-0">
        @if( Session::get('esDeUruguay'))
        <input
          name="Tu país"
          type="text"
          class="input-text-class-primary"
          v-model="data_mensaje.pais"
          required
        />

        @else
        <input
          name="Tu país"
          type="text"
          class="input-text-class-primary"
          v-model="data_mensaje.pais"
          required
        />

        @endif
        <label for="Tu país">Tu país</label>
      </fieldset>
    </div>
  </div>

  <div class="row mb-4">
    <p class="col-12 text-bold mb-4">
      <i class="far fa-building"></i> Tu negocio
    </p>
    <div class="col-lg-6">
      <fieldset class="float-label mb-0">
        <input
          name="Tu negocio"
          type="text"
          class="input-text-class-primary"
          v-model="data_mensaje.nombre_empresa"
          required
        />
        <label for="Tu negocio">Nombre de tu negocio</label>
      </fieldset>
      <div class="mb-2">
        <small>*Obligatorio </small>
      </div>
    </div>
  </div>

  <div class="row mb-4 justify-content-end">
    <p class="col-12 text-bold mb-4">¿Qué tipo de negocio es?</p>
    <div
      class="row align-items-center col-12 mb-2"
      v-for="negocio in tipoDeNegocios"
    >
      <input
        class="m-0 mr-2"
        type="radio"
        :id="negocio"
        :name="negocio"
        :value="negocio"
        v-model="data_mensaje.tipo_de_negocio"
      />
      <label class="color-text-gris m-0" :for="negocio">@{{ negocio }}</label>
    </div>
  </div>

  <div class="row mb-4 justify-content-end">
    <p class="col-12 text-bold mb-4">¿Cuántos clientes tenés?</p>
    <div
      class="row align-items-center col-12 mb-2"
      v-for="cantidad in cantidadDeClientes"
    >
      <input
        class="m-0 mr-2"
        type="radio"
        :id="cantidad"
        :name="cantidad"
        :value="cantidad"
        v-model="data_mensaje.cantidad_de_clientes"
      />
      <label class="color-text-gris m-0" :for="cantidad">@{{ cantidad }}</label>
    </div>
  </div>



  <div class="row mb-4 justify-content-end">
    <p class="col-12 text-bold mb-4">¿Cuáles soluciones necesitás?</p>
    <div
      class="row align-items-center col-12 mb-2"
      v-for="funcion in funciones"
      :key="funcion.name"
    >
      <input
        class="m-0 mr-2"
        type="checkbox"
        :id="funcion.name"

        :value="funcion.name"
        v-model="data_mensaje.funciones"
      />
      <label class="color-text-gris m-0" :for="funcion.name"
        >@{{ funcion.name }}</label
      >
    </div>
  </div>

  <div class="row mb-4">
    <p class="col-12 text-bold mb-4">
      ¿Cuál es el principal motivo por el cual buscas un software?
    </p>
    <div class="col-lg-12 mb-5">
      <fieldset class="float-label">
        <textarea
          name="Tu mensaje"

          required

          v-model="data_mensaje.mensaje"
          class="input-text-class-primary"
        ></textarea>

        <label for="Tu mensaje">Tu comentario</label>
      </fieldset>
    </div>
  </div>


  <div action="#" class="form">
    <div v-if="mostrar_si_se_contacta_por_easy_probar" action="#" class="form">
      <div class="row mb-4">
        <div class="form-group col-lg-6">
          <input
            v-model="data_mensaje.celular"
            type="text"
            :class="classImput"
            placeholder="¿Cuál es tu celular?"
          />
        </div>

        <div class="form-group col-lg-6">
          <input
            v-model="data_mensaje.nombre_empresa"
            type="email"
            :class="classImput"
            placeholder="¿Cómo se llama tu negocio?"
          />
        </div>
      </div>
    </div>

    <div v-if="mostrar_si_se_contacta_para_consultar_easy" class="row mb-4">
      <div class="form-group col-12">
        <textarea
          v-model="data_mensaje.mensaje"
          class="border-primary"
          cols="30"
          rows="4"
          :class="classImput"
          placeholder="Explica de manera detallada qué necesitas"
        ></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6" v-if="errores">
        <div :class="classTextColor" v-for="error in errores">@{{ error }}</div>
      </div>

      <div class="col-md-12">
        <div v-if="cargando" class="flex-column align-items-center">
          <div class="cssload-tube-tunnel" :class="classCargadorColor"></div>
        </div>
        <div
          v-else
          v-on:click="enviarMensaje"
          :class="classBoton"
          value="Enviar mensaje"
        >
          Enviar solicitud ahora
        </div>
      </div>
      <div></div>
    </div>
  </div>
</div>
@include('paginas.home.vue.Contacto.PartialLuegoEnvio')
