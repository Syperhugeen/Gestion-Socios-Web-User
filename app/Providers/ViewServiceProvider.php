<?php

namespace App\Providers;

use App\Http\ViewComposers\EmpresaViewComposer;
use App\Http\ViewComposers\UrlToDemoViewComposer;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('view')->composer(['layouts.admin_layout.header.global',
            'layouts.user_layout.navbar.navbar',
            'layouts.user_layout.footer.footer-general',
            'emails.layouts.layout_principal',
            'layouts.admin_layout.columna_derecha.columna',
            'layouts.user_layout.user_layout',
        ]
            , EmpresaViewComposer::class);

        $this->app->make('view')->composer("*", UrlToDemoViewComposer::class);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
