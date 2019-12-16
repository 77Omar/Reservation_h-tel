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

mix.js(['resources/js/app.js',
      'resources/js/bootstrap.js',
      'resources/js/jquery.js',
      'resources/js/bootstrap.min.js', 
      'resources/js/mousescroll.js',
      'resources/js/html5shiv.js',
      'resources/js/jquery-2.2.4.min.js',
      'resources/js/smoothscroll.js',
      'resources/js/jquery.prettyPhoto.js',
      'resources/js/jquery.isotope.min.js',
      'resources/js/jquery.inview.min.js',
      'resources/js/wow.min.js',
      'resources/js/custom-scripts.js',
      'resources/js/modernizr.custom.79639.js',
      'resources/js/owl.carousel.min.js',
      'resources/js/respond.min.js',
      'resources/js/jquery.ba-cond.min.js',
      'resources/js/jquery.slitslider.js',
      'resources/js/slitslider-custom.js'],
      'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles(['resources/css/bootstrap.min.css',
            'resources/css/font-awesome.css',
            'resources/css/font-awesome.min.css',
            'resources/css/animate.min.css',
            'resources/css/prettyPhoto.css',
            'resources/css/styles.css',
            'resources/css/styleNojs.css',
            'resources/css/slider-style.css',
            'resources/css/slider-custom.css',],
            'public/css/all.css');
