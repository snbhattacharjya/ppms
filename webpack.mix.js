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

/* CSS */
.sass('resources/sass/app.scss', 'public/css')
.sass('resources/sass/appui.scss', 'public/css/ppmsui.css')
.sass('resources/sass/ppmsui/themes/amethyst.scss', 'public/css/themes/')
.sass('resources/sass/ppmsui/themes/city.scss', 'public/css/themes/')
.sass('resources/sass/ppmsui/themes/flat.scss', 'public/css/themes/')
.sass('resources/sass/ppmsui/themes/modern.scss', 'public/css/themes/')
.sass('resources/sass/ppmsui/themes/smooth.scss', 'public/css/themes/')

/* JS */
.js('resources/js/app.js', 'public/js/app.js')
.js('resources/js/ppmsui/app.js', 'public/js/ppmsui.js')

/* Page JS */
.js('resources/js/pages/tables_datatables.js', 'public/js/pages/tables_datatables.js')

/* Tools */
.browserSync('localhost:8000')
.disableNotifications()

/* Options */
.options({
    processCssUrls: false
});