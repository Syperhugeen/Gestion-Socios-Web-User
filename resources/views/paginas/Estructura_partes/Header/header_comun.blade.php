<header-nav :scroll="true" color_tipo="simple" inline-template>
  <header
    class="py-2 py-lg-0 shadow-sm"
    :class="getClassHeader"
    role="banner"
    id="headerID"
  >
    <div class="container-fluid">
      <div class="row align-items-center justify-content-between">
        <div class="pl-2">
          <div class="w-100 d-flex flex-row align-items-center gap-4">
            <a
              href="{{route('get_home')}}"
              class="d-block"
              style="width: 120px"
            >
              <img
                v-if="$root.scrolled > 0"
                src="{{url()}}/imagenes/Empresa/logo-rectangular-easysocio-color.png"
                class="img-fluid"
              />
              <img
                v-else
                src="{{url()}}/imagenes/Empresa/logo-rectangular-easysocio-blanco.png"
                class="img-fluid"
              />
            </a>

            <img
              src="{{Session::get('pais')->url_img}}"
              width="25"
              height="25"
              class="rounded-circle"
            />
          </div>
        </div>

        <nav
          v-if="mostrar_opciones_del_menu"
          class="col-lg-8 d-flex flex-column align-items-end"
          role="navigation"
          :class="getClassMostrarMenuMovil"
        >
          <ul
            :class="getClassNavUlEnMovil"
            class="d-flex flex-column align-items-start flex-lg-row align-items-lg-center m-0 px-lg-3"
          >
            <div
              v-if="$root.mostrar_para_celuar"
              v-on:click="set_mostrar_menu_movil"
              class="p-2 w-100 text-right h3 my-0"
            >
              <i class="fas fa-times"></i>
            </div>
            <li class="header-nav-ul-li">
              <a
                :class="getClassItemsNav"
                href="{{route('get_home')}}"
                class="nav-link"
                >Inicio</a
              >
            </li>
            <li @click="showModalSolucion = true" class="header-nav-ul-li">
              <span :class="getClassItemsNav" class="nav-link cursor-pointer"
                >Nuestra solución</span
              >
            </li>

            <transition name="modal">
              <div class="modal-mask" v-if="showModalSolucion">
                <div class="modal-wrapper">
                  <div class="modal-container position-relative">
                    <span
                      class="modal-cerrar-icono sub-titulos-class text-center color-text-gris"
                      @click="showModalSolucion = !showModalSolucion"
                    >
                      <i class="fas fa-times"></i>
                    </span>

                    <div class="row mx-0">
                      <h4 class="col-12 text-center mb-4">Software para ...</h4>
                      <div class="col-12 col-md-6 mb-2">
                        <a
                          class="Boton-Fuente-Chica Boton-Primario-Sin-Relleno"
                          href="{{route('get_programa_para_gestionar_gimancios')}}"
                        >
                          Gimnasios y centros de fitness
                        </a>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                        <a
                          class="Boton-Fuente-Chica Boton-Primario-Sin-Relleno"
                          href="{{route('get_programa_para_gestionar_escuelas_de_danza')}}"
                        >
                          Academias de danza
                        </a>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                        <a
                          class="Boton-Fuente-Chica Boton-Primario-Sin-Relleno"
                          href="{{route('get_programa_para_gestionar_box_crossfit')}}"
                        >
                          Box de crossfit y funcionales
                        </a>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                        <a
                          class="Boton-Fuente-Chica Boton-Primario-Sin-Relleno"
                          href="{{route('get_programa_para_gestionar_escuela_de_artes_marciales')}}"
                        >
                          Escuela de artes marciales
                        </a>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                        <a
                          class="Boton-Fuente-Chica Boton-Primario-Sin-Relleno"
                          href="{{route('get_pagina_yoga')}}"
                        >
                          Centro de yoga/pilates
                        </a>
                      </div>

                      <div class="col-12 col-md-6 mb-2">
                        <a
                          class="Boton-Fuente-Chica Boton-Primario-Sin-Relleno"
                          href="{{route('get_personal_trainer')}}"
                        >
                          Personal trainers
                        </a>
                      </div>
                    </div>

                    <div class="modal-body"></div>

                    <div class="modal-footer">
                      <button
                        class="modal-default-button"
                        @click="showModalSolucion = !showModalSolucion"
                      >
                        Cerrar
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </transition>

            <li class="header-nav-ul-li">
              <a
                :class="getClassItemsNav"
                href="{{route('get_pagina_precios')}}"
                class="nav-link"
                >Precios</a
              >
            </li>

            <li class="header-nav-ul-li">
              <a
                :class="getClassItemsNav"
                href="{{route('get_funcionalidades')}}"
                class="nav-link"
                >Funcionalidades</a
              >
            </li>

            <li class="header-nav-ul-li">
              <a
                :class="getClassItemsNav"
                href="{{route('get_pagina_noticias_listado')}}"
                class="nav-link"
                >Blog</a
              >
            </li>
            <li class="header-nav-ul-li">
              <a
                :class="getClassItemsNav"
                href="{{route('get_pagina_contacto','-')}}"
                class="nav-link"
                >Contacto</a
              >
            </li>
            <li class="header-nav-ul-li">
              <a
                :class="getClassItemsNav"
                href="{{$urlToDemo}}"
                class="nav-link"
              >
                <button class="btn btn-primary">Comenzar gratis</button>
              </a>
            </li>
          </ul>
        </nav>
        <div class="d-flex align-items-center gap-4 pr-2">
          <a :class="getClassItemsNav" href="{{$urlToDemo}}" class="nav-link">
            <button class="btn btn-primary">Comenzar gratis</button>
          </a>
          <div
            v-if="$root.mostrar_para_celuar"
            v-on:click="set_mostrar_menu_movil"
            class="text-right h4 my-0"
            :class="getClassColorElement"
          >
            <i v-if="!mostrar_menu_en_movil" class="fas fa-bars"></i>
          </div>
        </div>
      </div>
    </div>
  </header>
</header-nav>
