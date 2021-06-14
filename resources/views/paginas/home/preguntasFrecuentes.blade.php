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

			<div class="col-12 d-flex flex-column align-items-center">
				<div class="col-12 col-lg 8">
					<pregunta-componente
						pregunta="¿Cuál es el precio?"
						:muestra="true"
					>
						<template slot="respuesta">



							<p>

							Cada página es un mundo, por lo tanto es difícl detallar un precio exacto.
							Si querés saber de manera detallada cuánto cuesta el desarrollo  de tu sitio
							web, lo podés calcular
							<a href="{{ route('get_pagina_contacto', '-') }}">
								<strong>aquí</strong> </a
							>.
							</p>


						</template>
					</pregunta-componente>
				</div>
				<div class="col-12 col-lg 8">
					<pregunta-componente
						pregunta="¿Qué tipo de páginas hacen?"
						:muestra="false"
					>
						<template slot="respuesta">
							Principalmente páginas web corporativas y tiendas online para
							empresas de todos los tamaños y sectores.
						</template>
					</pregunta-componente>
				</div>

				<div class="col-12 col-lg 8">
					<pregunta-componente
						pregunta="¿Cuánto demoran en hacer una página web?"
						:muestra="false"
					>
						<template slot="respuesta">
							Tardamos unos 10 días aproximadamente.  A lo largo de los años, hemos creado un proceso ágil y simple que nos
							permite diseñar y desarrollar páginas web y tiendas online con
							mucha calidad en muy poco tiempo.
						</template>
					</pregunta-componente>
				</div>

				<div class="col-12 col-lg 8">
					<pregunta-componente
						pregunta="¿Qué tecnologías usan para hacer las páginas webs?"
						:muestra="false"
					>
						<template slot="respuesta">
							Hacemos los sitios web utilizando tecnologías como React, Vue, Node y Laravel.
							Esto nos permite contruir  páginas webs profesionales, muy optimizadas, escalables y modernas.
						</template>
					</pregunta-componente>
				</div>

				<div class="col-12 col-lg 8">
					<pregunta-componente
						pregunta="¿Solo hacen diseño web en Uruguay?"
						:muestra="false"
					>
						<template slot="respuesta">
							No. No solo hacemos diseño web en Uruguay. Ofrecemos nuestro
							servicios de diseño web a cualquier empresa sin importar el país.
						</template>
					</pregunta-componente>
				</div>

				<div class="col-12 col-lg 8">
					<pregunta-componente
						pregunta="¿Cómo son los pasos si ya estoy decidido/a a tener mi página web?"
						:muestra="false"
					>
						<template slot="respuesta">
							<ol>
								<li>
									Danos la orden de comenzar a diseñar entrando a
									<a href="{{ route('get_pagina_contacto', '-') }}">

									<strong>este link</strong></a>.
								</li>
								<li>
									Te cobraremos una parte del costo adelantado y ahí comenzaremos
									a diseñar (nos lleva algunos días y quizás te contactemos
									varias veces para que nos vayas dando feedback de cómo
									venimos).
								</li>
								<li>
									Una vez terminada y ya montada en el servidor, te enseñaremos
									a usarla y además estaremos orientándote y trabajando contigo
									la mejor extrategía para que tú página se posicione.
								</li>

							</ol>
						</template>
					</pregunta-componente>
				</div>
			</div>
		</div>
	</div>
</div>
