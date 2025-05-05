<?php

//Post Form Contacto
Route::post('post_contacto_form',
    [
        'uses' => 'Publicas\Envio_Formularios_Controller@post_contacto_form',
        'as'   => 'post_contacto_form',
    ]);

Route::post('post_nuevo_newsletter',
    [
        'uses' => 'Publicas\Envio_Formularios_Controller@post_nuevo_newsletter',
        'as'   => 'post_nuevo_newsletter',
    ]);

Route::get('changeUserNewsletterToNotSend-{email}',
    [
        'uses' => 'Publicas\Envio_Formularios_Controller@changeUserNewsletterToNotSend',
        'as'   => 'changeUserNewsletterToNotSend',
    ]);


