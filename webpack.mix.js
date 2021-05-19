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
//  mix.postCss('resources/mind/css/component.css', 'public/css');


mix
    /* CSS */
    // .sass('resources/sass/main.scss', 'public/css/oneui.css')
    // .sass('resources/sass/oneui/themes/amethyst.scss', 'public/css/themes/')
    // .sass('resources/sass/oneui/themes/city.scss', 'public/css/themes/')
    // .sass('resources/sass/oneui/themes/flat.scss', 'public/css/themes/')
    // .sass('resources/sass/oneui/themes/modern.scss', 'public/css/themes/')
    // .sass('resources/sass/oneui/themes/smooth.scss', 'public/css/themes/')
    .postCss('resources/mind/css/component.css', 'public/mind/css')
    .postCss('resources/mind/css/font-awesome.min.css', 'public/mind/css')
    .postCss('resources/mind/css/ionicons.css', 'public/mind/css')
    .postCss('resources/mind/css/jquery.mCustomScrollbar.css', 'public/mind/css')
    .postCss('resources/mind/css/linearicons.css', 'public/mind/css')
    .postCss('resources/mind/css/pcoded-horizontal.min.css', 'public/mind/css')
    .postCss('resources/mind/css/simple-line-icons.css', 'public/mind/css')
    .postCss('resources/mind/css/style.css', 'public/mind/css')

    .postCss('resources/mind/bower_components/bootstrap/css/bootstrap.min.css', 'public/mind/bower_components/bootstrap/css')
    .postCss('resources/mind/pages/waves/css/waves.min.css', 'public/mind/pages/waves/css')
    .postCss('resources/mind/icon/themify-icons/themify-icons.css', 'public/mind/icon/themify-icons')
    .postCss('resources/mind/icon/icofont/css/icofont.css', 'public/mind/icon/icofont/css')
    .postCss('resources/mind/icon/font-awesome/css/font-awesome.min.css', 'public/mind/icon/font-awesome/css')


    
       
    

    /* JS */
    .js('resources/mind/bower_components/jquery/js/jquery.min.js', 'public/mind/bower_components/jquery/js')
    .js('resources/mind/bower_components/jquery-ui/js/jquery-ui.min.js', 'public/mind/bower_components/jquery-ui/js')
    .js('resources/mind/bower_components/popper.js/js/popper.min.js', 'public/mind/bower_components/popper.js/js')
    .js('resources/mind/bower_components/bootstrap/js/bootstrap.min.js', 'public/mind/bower_components/bootstrap/js')

    .js('resources/mind/pages/waves/js/waves.min.js', 'public/mind/pages/waves/js')
    .js('resources/mind/bower_components/jquery-slimscroll/js/jquery.slimscroll.js', 'public/mind/bower_components/jquery-slimscroll/js')
    .js('resources/mind/bower_components/modernizr/js/modernizr.js', 'public/mind/bower_components/modernizr/js')
    .js('resources/mind/bower_components/modernizr/js/css-scrollbars.js', 'public/mind/bower_components/modernizr/js')
    .js('resources/mind/bower_components/i18next/js/i18next.min.js', 'public/mind/bower_components/i18next/js')

    .js('resources/mind/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js', 'public/mind/bower_components/i18next-xhr-backend/js')
    .js('resources/mind/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js', 'public/mind/bower_components/i18next-browser-languagedetector/js')

    .js('resources/mind/bower_components/jquery-i18next/js/jquery-i18next.min.js', 'public/mind/bower_components/jquery-i18next/js/jquery-i18next.min.js')
    .js('resources/mind/js/common-pages.js', 'public/mind/js')



    /* Page JS */



    /* Tools */
    .browserSync('localhost:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });
