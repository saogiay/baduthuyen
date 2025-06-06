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

mix
  .scripts(
    [
      'public/js/frontend/jquery.min.js',
      'public/js/frontend/bootstrap.min.js',
      'public/js/frontend/stellarnav.js',
      'public/js/frontend/lightslider.js',
    ],
    'public/js/app.js'
  )
  .minify('public/js/app.js')
  .version();

mix
  .styles(
    [
      'public/css/frontend/bootstrap.min.css',
      'public/css/frontend/stellarnav.css',
      'public/css/frontend/lightslider.css',
      'public/css/frontend/alo.css',
      'public/css/frontend/style.css',
    ],
    'public/css/app.css'
  )
  .minify('public/css/app.css')
  .version()
  .sourceMaps(false, 'source-map')
  .disableNotifications();
