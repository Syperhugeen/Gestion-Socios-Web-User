<?php

//Noticias
Route::get('/blog', [
    'uses' => 'Publicas\Paginas_Controller@get_pagina_noticias_listado',
    'as'   => 'get_pagina_noticias_listado']
);
//Noticia Individual
Route::get('/blog/{name}/{id}', [
    'uses' => 'Publicas\Paginas_Controller@get_pagina_noticia_individual',
    'as'   => 'get_pagina_noticia_individual']
)->where([
    'id'   => '[0-9]+',
    'name' => '[ 0-9A-Za-zñÑáéíóúÁÉÍÓÚ +-.,]+',
]);

Route::get('/blog-newsletter-{id}-{email}', [
    'uses' => 'Publicas\Paginas_Controller@get_pagina_newsletter_noticias_listado',
    'as'   => 'get_pagina_newsletter_noticias_listado']
);
