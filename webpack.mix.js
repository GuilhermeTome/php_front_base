const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

let compressed = {
    sassOptions: {
        outputStyle: 'compressed'
    }
};

mix.sass('resources/sass/app.scss', 'public/assets/css', compressed);

mix.js('resources/js/home/welcome.js', 'public/assets/js/welcome.js');