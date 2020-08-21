var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    

   
   
     mix.sass('credo_scss/style.scss','public/css/credo.css'); 
     mix.sass('admin.scss','public/css'); 

     mix.scripts([
        'vue_plugs/Vue-production.js',  
        'vue_plugs/Vue-Lazyload.js' ,

        ],'public/js/production.js');

        mix.scripts([
        'vue_plugs/Vue-dev.js',          
        'vue_plugs/Vue-Lazyload.js'

        ],'public/js/dev.js'); 


    mix.scripts([
        
        'credo_js/jquery-3.3.1.min.js',
        'credo_js/bootstrap.min.js',
        'credo_js/jquery.easing.1.3.js',
        'Plugins/Plug-lazyLoadXT.js',
        'Customs/helper_generales.js',
        'Customs/admin_eventos.js'
       
       

       ],'public/js/admin.js');

   

     mix.scripts([
        
        /*'credo_js/jquery-3.3.1.min.js',
        'credo_js/bootstrap.min.js',
        'credo_js/jquery.easing.1.3.js',
        'credo_js/jquery.sticky.js',
        'credo_js/main.js', */
        'Plugins/Vue-Lazyload.js',  
        
       

       ],'public/js/credo.js');


    elixir(function(mix) {
            mix.version(['css/credo.css','css/admin.css' ,'js/admin.js','js/production.js','js/dev.js']); 
    });

    
});
