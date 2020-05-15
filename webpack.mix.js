const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/bootstrap.js', 'public/js');

mix.copy('resources/js/site/bootstrap.min.js', 'public/js/site/bootstrap.min.js');
mix.copy('resources/js/site/jquery.min.js', 'public/js/site/jquery.min.js');
mix.copy('resources/js/site/jquery-3.4.1.slim.min.js', 'public/js/site/jquery-3.4.1.slim.min.js');
mix.copy('resources/js/site/popper.min.js', 'public/js/site/popper.min.js');

mix.copy('resources/css/site/bootstrap.min.css',  'public/css/site/bootstrap.min.css');
mix.copy('resources/css/site/cover.css',  'public/css/site/cover.css');
