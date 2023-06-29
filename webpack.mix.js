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

 mix.js('resources/js/appAdmin.js', 'public/js')
 .postCss('resources/css/appAdmin.css', 'public/css', [
     //
 ]);

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/main.scss', 'public/css', [

    ])
    .sass('resources/scss/admin.scss', 'public/css', [

    ])
    .sass('resources/scss/accueil_user.scss', 'public/css', [

    ])
    .sass('resources/scss/commande.scss', 'public/css', [

    ])
    .sass('resources/scss/bilan_commande.scss', 'public/css', [

    ])
    .sass('resources/scss/annuler.scss', 'public/css', [

    ])
    .sass('resources/scss/cuisine.scss', 'public/css', [

    ])
    .sass('resources/scss/cuisine_detail.scss', 'public/css', [

    ])
    .js('resources/js/main.js', 'public/js')

    ;

mix.copy('resources/images', 'public/images');

// mix.sass('resources/scss/main.scss', 'public/css')
//
// .js('resources/js/app.js', 'public/js');



