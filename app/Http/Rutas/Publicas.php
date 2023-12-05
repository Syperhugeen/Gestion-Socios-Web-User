<?php

require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';

require __DIR__ . '/Noticias/Rutas_Noticias_Publicas.php';

//H o m e
Route::get('/', [
    'uses' => 'Publicas\Home_Public_Controller@get_home',
    'as'   => 'get_home']
);

// C o n t a c t o
Route::get('/Contacto{tipo}', [
    'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
    'as'   => 'get_pagina_contacto']
);

Route::get('/EasySocio-Contacto-De-Software-para-gimnasios', [
    'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto_easy',
    'as'   => 'get_pagina_contacto_easy']
);

// E m p r e s a
Route::get('/Empresa', [
    'uses' => 'Publicas\Paginas_Controller@get_pagina_empresa',
    'as'   => 'get_pagina_empresa']
);

Route::get('/precios', [
    'uses' => 'Publicas\Paginas_Controller@get_pagina_precios',
    'as'   => 'get_pagina_precios']
);

// S o f t w a r e   p a r a   g i m n a s i o s
Route::get('/software-para-gimnasios', [
    'uses' => 'Publicas\Paginas_Controller@get_programa_para_gestionar_gimancios',
    'as'   => 'get_programa_para_gestionar_gimancios']
);

Route::get('/software-para-escuelas-de-danza', [
    'uses' => 'Publicas\Paginas_Controller@get_programa_para_gestionar_escuelas_de_danza',
    'as'   => 'get_programa_para_gestionar_escuelas_de_danza']
);

Route::get('/software-para-box-corssfit-y-funcionales', [
    'uses' => 'Publicas\Paginas_Controller@get_programa_para_gestionar_box_crossfit',
    'as'   => 'get_programa_para_gestionar_box_crossfit']
);

Route::get('/software-para-escuela-de-artes-marciales', [
    'uses' => 'Publicas\Paginas_Controller@get_programa_para_gestionar_escuela_de_artes_marciales',
    'as'   => 'get_programa_para_gestionar_escuela_de_artes_marciales']
);

Route::get('/hablemos', [
    'uses' => 'Publicas\Paginas_Controller@get_hablemos',
    'as'   => 'get_hablemos']
);

Route::get('/funcionalidades', [
    'uses' => 'Publicas\Paginas_Controller@get_funcionalidades',
    'as'   => 'get_funcionalidades']
);

Route::get('/software-para-centros-de-yoga-y-pilates', [
    'uses' => 'Publicas\Paginas_Controller@get_pagina_yoga',
    'as'   => 'get_pagina_yoga']
);


Route::get('/software-para-gestion-de-clientes', [
    'uses' => 'Publicas\Paginas_Controller@get_personal_trainer',
    'as'   => 'get_personal_trainer']
);


Route::group(['prefix' => 'api'], function () {
    Route::get('access-devices',  [
        'uses' => 'Publicas\ApiController@getAccessDevices',
        'as'   => 'getAccessDevices']);
});





