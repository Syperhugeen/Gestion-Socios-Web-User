<div class="site-section background-gris-1">
	<div class="container">
		<div class="row" v-lazy-container="{ selector: 'img' }">
			<div class="col-12  position-relative">
				<p class="text-center text-uppercase">Preguntas frecuentes</p>
				<h2
					class="col-12   text-bold h2 text-center mb-5"
				>
				FAQ
				</h2>

				<div class="w-100 mb-3"></div>
			</div>

			<div class="col-12">
				<div class="col-12">
					<pregunta-componente
						pregunta="¿Cuál es el precio?"
						:muestra="true"
					>
						<template slot="respuesta">



							<p>

							Cada negocio es un mundo, por lo tanto hemos creado varios planes que se adaptan a diferente tipo de negocios. Mirá los planes y precios
							<a  href="{{ route('get_pagina_precios') }}">
								<strong>aquí</strong> </a
							>.
							<br>

							<a href="{{ route('get_pagina_precios') }}
							" class="btn btn-primary mt-3">Ver planes y precios</a>
							</p>


						</template>
					</pregunta-componente>
				</div>


				<div class="col-12">
					<pregunta-componente
						pregunta="¿Cuáles son los pasos a seguir si quiero contratar?"
						:muestra="false"
					>
						<template slot="respuesta">

						<ol>
							<li>Avisanos que querés el software <a href="{{ route('get_hablemos') }}
							" class="">aquí</a>. </li>
							<li>
							   Alquien de nuestro equipo se pondrá en contacto contigo para hablar de tu negocio,  mostrarte el software y <a href="{{ route('get_pagina_precios') }}"> elegir el plan </a>
							    más conveniente.
							</li>
							<li>
								Te ayudaremos a configurarlo y ponerlo en marcha.
							</li>
							<li>
								Te enseñaremos a manejarlo paso a paso cada función del software.
							</li>
							<li>
								Luego de que esté en marcha y ya sepas como usarlo te comenzaremos a cobrar.
							</li>

						</ol>




<a href="{{ route('get_hablemos') }}
" class="btn btn-primary mt-3">Contratar <span class="font-secondary helper-aumenta-texto">easy</span>socio </a>



						</template>
					</pregunta-componente>
				</div>

				<div class="col-12">
					<pregunta-componente
						pregunta="¿Me capacitan?"
						:muestra="false"
					>
						<template slot="respuesta">

						Nuestro software se aprende  <span class="font-secondary helper-aumenta-texto"> easy. </span> A pesar de eso te enseñaremos paso a paso a como operar <span class="font-secondary helper-aumenta-texto">easy</span>socio.

						</template>
					</pregunta-componente>
				</div>


				<div class="col-12">
					<pregunta-componente
						pregunta="¿Se hace contrato?"
						:muestra="false"
					>
						<template slot="respuesta">

						No se hace contrato. <span class="font-secondary helper-aumenta-texto">easy</span>socio es de pago mensual. Si querés dejar de usar easysocio, simplemente dejas de abonar y ¡listo!

						</template>
					</pregunta-componente>
				</div>

				<div class="col-12">
					<pregunta-componente
						pregunta="¿Cómo se instala?"
						:muestra="false"
					>
						<template slot="respuesta">

						<p><b>No se instala</b>. <span class="font-secondary helper-aumenta-texto">easy</span>socio se encuentra alojado en la nube. Esta es la primera ventaja que debes tener presente sobre nuestra herramienta, ya que se trata de una característica que te ahorra tiempo y dinero, al evitar las incómodas instalaciones de software y el inevitable soporte técnico que requieren.</p>



						<p>Además, no deberás adquirir y mantener servidores que representan una gran inversión tanto en hardware como en técnicos que lo manejen y le den servicio permanente. Te evitas las actualizaciones de la memoria para poder crear los respaldos necesarios y todos los costos asociados a estas actividades y a la reposición de equipos producto de la obsolescencia tecnológica.</p>
							</template>
					</pregunta-componente>
				</div>

				<div class="col-12">
					<pregunta-componente
						pregunta="¿Qué se necesita para poder usar easysocio?"
						:muestra="false"
					>
						<template slot="respuesta">

						<p>sSolo necesitas un dispositivo (pc, celular o notebook) que esté conectado a internet</p>



						</template>
					</pregunta-componente>
				</div>









			</div>
		</div>
	</div>
</div>
