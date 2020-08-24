<?php 




require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';

require __DIR__ . '/Noticias/Rutas_Noticias_Publicas.php';




//Ruta de Home
Route::get('/' , [                    
  'uses' => 'Publicas\Home_Public_Controller@get_home',
  'as'   => 'get_home']
);


//Contacto
Route::get('/Contacto{tipo}' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
  'as'   => 'get_pagina_contacto']
);

Route::get('/EasySocio-Contacto-De-Software-para-gimnasios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto_easy',
  'as'   => 'get_pagina_contacto_easy']
);

//Empresa
Route::get('/Empresa' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_empresa',
  'as'   => 'get_pagina_empresa']
);



















