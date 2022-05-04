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
mix.scripts(['resources/js/jsCrud.js'], 'public/js/jsCrud.js')
   .scripts(['resources/js/frontend.js'], 'public/js/frontend.js')
   .scripts(['resources/js/backend.js'], 'public/js/backend.js')
   .scripts(['resources/js/all.js'], 'public/js/all.js')
   
   .sass('resources/sass/backend/admin.scss', 'public/css/admin.css')
   .sass('resources/sass/frontend/frontend.scss', 'public/css/frontend.css')
   .options({
      processCssUrls: false 
   });

