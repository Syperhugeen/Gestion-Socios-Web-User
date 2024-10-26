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
);

Route::get('/blog-newsletter-{id}-{email}', [
    'uses' => 'Publicas\Paginas_Controller@get_pagina_newsletter_noticias_listado',
    'as'   => 'get_pagina_newsletter_noticias_listado']
);

Route::get('/blogFullList', [
    'uses' => 'Admin_Empresa\Admin_Noticias_Controllers@blogFullList',
    'as'   => 'blogFullList']
);