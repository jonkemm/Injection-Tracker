const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/sass/main.scss', 'public/css');

// mix.js('resources/js/app.js', 'public/js')
//     .js('resources/js/site.app.js', 'public/js')
//     .sass('resources/sass/main.scss', 'public/css');

// mix.js('resources/js/site.app.js', 'public/js')
//     .sass('resources/sass/main.scss', 'public/css', [
//         require('postcss-import'),
//         require('tailwindcss'),
//         require('autoprefixer'),
// ]);
