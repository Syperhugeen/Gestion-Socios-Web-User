<?php

/**
 * Para solucionar el error que genera las versiones de php mayores a 7.1
 * count(): Parameter must be an array or an object that implements Countable
 *
 * TODO Hacer Upgrade (de todo el sistema) de la versión de laravel con Laravel Shifst.
 */



if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

// Authentication routes...
require __DIR__ . '/Rutas/Auth.php';

Route::group(['middleware' => 'whereItCameFrom'], function () {

    Route::group(['middleware' => 'uruguayOFuera'], function () {

        require __DIR__ . '/Rutas/Publicas.php';
    });
});

// Cron routes
require __DIR__ . '/Rutas/Cron.php';

/**
 * Grupo de Rutas con middleware
 */
Route::group(['middleware' => 'auth'], function () {
    //usuario verificado
    Route::group(['middleware' => 'verificad'], function () {
        require __DIR__ . '/Rutas/Usuarios_Verificados.php';

        //admin_empresa_clientes
        Route::group(['middleware' => 'role:admin_empresa'], function () {
            require __DIR__ . '/Rutas/Admin_Empresa_Cliente.php';

            //admin_nuestro
            Route::group(['middleware' => 'role:adminMcos522'], function () {
                require __DIR__ . '/Rutas/Admin_Supremo.php';
            });
        });
    });
});

Route::group([
    'apiWithToken' => 'apiWithToken',
    'prefix'       => 'api',
], function () {

    Route::group([
        'prefix' => 'blog',
    ], function () {

        Route::group([
            'prefix'     => 'easysocio',
            'middleware' => 'webBelong:' . config('constants.web_belong.easysocioExternalWeb'),
        ], function () {

            Route::post('getBlogs', [
                'uses' => 'ApiBlogController@getBlogs',
                'as'   => 'getBlogs',
            ]);

            Route::post('relatedBlogs', [
                'uses' => 'ApiBlogController@relatedBlogs',
                'as'   => 'relatedBlogs',
            ]);

            Route::post('getBlogById', [
                'uses' => 'ApiBlogController@getBlogById',
                'as'   => 'getBlogById',
            ]);

            Route::post('getAllByLang', [
                'uses' => 'ApiBlogController@getAllByLang',
                'as'   => 'getAllByLang',
            ]);
        });
    });
});
