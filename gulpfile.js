var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.sass('homepage.scss');    

    /* JQUERY */
    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.min.js',        
        '../../../node_modules/popper.js/dist/umd/popper.min.js',        
        '../../../node_modules/tooltip.js/dist/umd/tooltip.min.js',        
        '../../../node_modules/bootstrap/dist/js/bootstrap.min.js',
        '../../../node_modules/paper-kit-2/assets/js/paper-kit.js'
    ], 'public/js/app.js');
    
    /* PAPER KIT */
    mix.copy('node_modules/paper-kit-2/assets/fonts', 'public/fonts', false);
    
    /* FONT AWESOME */
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts', false);
});