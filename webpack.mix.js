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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        
        mix.styles([
            'resources/cronnos/css/boostrap.min.css',
            'resources/cronnos/css/style.css',
            'resources/cronnos/css/tempusdominus-boostrap-4.min.css',
        ], 'public/css/app.css')
            .scripts([
                'resources/cronnos/js/chart.min.js',
                'resources/cronnos/js/easing.min.js',
                'resources/cronnos/js/main.js',
                'resources/cronnos/js/moment-timezone.min.js',
                'resources/cronnos/js/moment.min.js',
                'resources/cronnos/js/owl.carousel.min.js',
                'resources/cronnos/js/tempusdominus-boostrap-4.min.js',
                'resources/cronnos/js/waypoints.min.js',
            ], 'public/js/app.js');


    ]);
