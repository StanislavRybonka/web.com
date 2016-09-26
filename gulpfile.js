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
elixir.config.production = true;
elixir(function(mix) {
    mix.styles([
        '/css/main.css'
    ], 'public/styles/base_styles.css', 'public');

    mix.version('public/styles/base_styles.css');
});
