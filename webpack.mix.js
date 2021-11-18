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

mix.js('resources/backend/js/bootstrap.bundle.min.js', 'public/backend/js')
    .js('resources/backend/js/chart.min.js', 'public/backend/js')
    .js('resources/backend/js/dynamic-pie-chart.js', 'public/backend/js')
    .js('resources/backend/js/fullcalendar.js', 'public/backend/js')
    .js('resources/backend/js/jvectormap.min.js', 'public/backend/js')
    .js('resources/backend/main.js', 'public/backend/js')
    .js('resources/backend/moment.min.js', 'public/backend/js')
    .js('resources/backend/js/polyfill.js', 'public/backend/js')
    .js('resources/backend/js/world-merc.js', 'public/backend/js')
    .postCss('resources/backend/css/bootstrap.min.css', 'public/backend/css', [
        //
    ])
    .postCss('resources/backend/css/fullcalendar.css', 'public/backend/css', [
        //
    ])
    .postCss('resources/backend/css/lineicons.css', 'public/backend/css', [
        //
    ])
    .postCss('resources/backend/css/main.css', 'public/backend/css', [
        //
    ])
    .postCss('resources/backend/css/materialdesignicons.min.css', 'public/backend/css', [
        //
    ])
    .postCss('resources/backend/css/morris.css', 'public/backend/css', [
        //
    ])
    .copy('resources/backend/img', 'public/backend/img')
    .copy('resources/backend/scss', 'public/backend/scss')
    .copy('resources/backend/fonts', 'public/backend/fonts')

    .js('resources/frontend/js/main.js', 'public/frontend/js')
    .postCss('resources/frontend/css/style.css', 'public/frontend/css', [
        //
    ])
    .copy('resources/frontend/img','public/frontend/img')
    .copy('resources/frontend/lib','public/frontend/lib')

