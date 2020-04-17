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

mix.copy('resources/assets/js/all.js', 'public/js/all.js');

mix.copy('resources/assets/js/custome.js','public/js/custome.js');

mix.styles([
    'resources/assets/css/my-account.css'
], 'public/css/my-account.css');

mix.styles([
    'resources/assets/css/style.css'
], 'public/css/style.css');


