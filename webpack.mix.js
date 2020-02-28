let mix = require('laravel-mix');

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

mix.sass('resources/assets/sass/common.scss', 'public/css')
    .sass('resources/assets/sass/external.scss', 'public/css')
    .sass('resources/assets/sass/home.scss', 'public/css')
    .sass('resources/assets/sass/hover-image.scss', 'public/css')
    .sass('resources/assets/sass/contact.scss', 'public/css')
    .sass('resources/assets/sass/gallery.scss', 'public/css')
    .sass('resources/assets/sass/album-image.scss', 'public/css')
    .sass('resources/assets/sass/style.scss', 'public/css')
    .sass('resources/assets/sass/manufacturer.scss', 'public/css');

mix.sass('resources/assets/sass/admin/style.scss', 'public/css/admin');

mix.js('resources/assets/js/album-image.js', 'public/js')
