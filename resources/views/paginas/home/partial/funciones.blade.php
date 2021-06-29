<div class="col-11 col-lg-3 px-2 mb-3 mb-lg-0">
          <simple-card titulo="Manejo de mebresías" >
            <template slot="icono">
              <div class="d-flex flex-row align-items-center rounded  mb-1" :style=" $root.mostrar_para_grande ?  {height:'200px'} : {}"  >
                 <img class="img-fluid" src="{{url()}}/imagenes/Drwas/mebresias.png" alt="Icono de manejo de mebresías">
               </div>
            </template>

            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Te ayudaremos a que sepas qué tiene contratado cada socio, cuándo se le vence y si está al día. Atomatizaremos este proceso para que no tengas que gastar nada de tiempo.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2  mb-3 mb-lg-0">
          <simple-card titulo="Reservas online">
            <template slot="icono">
              <div  class="d-flex flex-row align-items-center rounded  mb-1" :style=" $root.mostrar_para_grande ?  {height:'200px'} : {}" >
              <img class="img-fluid" src="{{url()}}/imagenes/Drwas/reservas.png" alt="Icono de reservas de clases online">
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                 Te ayudaremos a organizar las clases, permitiendo a tus socios hacer reservas de clases online.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2  mb-3 mb-lg-0">
          <simple-card titulo="Finanzas">
            <template slot="icono">
            <div  class="d-flex flex-row align-items-center rounded  mb-1" :style=" $root.mostrar_para_grande ?  {height:'200px'} : {}" >
              <img class="img-fluid" src="{{url()}}/imagenes/Drwas/finanzas.png" alt="Icono de finanzas">
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Cada operación que hagas se irá registrando y luego podremos darte informes que te dirán lo que vendiste y lo que gastaste.
                </div>
            </template>
          </simple-card>
      </div>

      <div class="col-11 col-lg-3 px-2  mb-3 mb-lg-0">
          <simple-card titulo="Control de acceso">
            <template slot="icono">
            <div  class="d-flex flex-row align-items-center rounded  mb-1" :style=" $root.mostrar_para_grande ?  {height:'200px'} : {}" >
              <img class="img-fluid" src="{{url()}}/imagenes/Drwas/control.png" alt="Icono de control de acceso">
               </div>
            </template>
            <template slot="description">
                <div class="parrafo-class-pequeño">
                  Es fastidioso tener que decirle a alquien que tiene que pagar. Nosotros nos ocuparemos de eso al momento que tu socios pasa por el control de acceso.
                </div>
            </template>
          </simple-card>
      </div>
