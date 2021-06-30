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

Route::get('/hablemos', [
    'uses' => 'Publicas\Paginas_Controller@get_hablemos',
    'as'   => 'get_hablemos']
);

Route::get('/funcionalidades', [
    'uses' => 'Publicas\Paginas_Controller@get_funcionalidades',
    'as'   => 'get_funcionalidades']
);
