var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // Build Stylesheet
    mix.sass(
        'stylesheet.scss',
        'public/css/stylesheet.css',
        {
            includePaths: [
                'node_modules/bootstrap-sass/assets/stylesheets/',
                'node_modules/font-awesome/scss/'
            ]
        }
    );
    // Build Admin Stylesheet
    mix.sass(
        'admin.scss',
        'public/css/admin.css',
        {
            includePaths: [
                'node_modules/bootstrap-sass/assets/stylesheets/',
                'node_modules/font-awesome/scss/',
                'node_modules/eonasdan-bootstrap-datetimepicker/src/sass/',
            ]
        }
    );
    // Copy Bootstrap's JS
    mix.copy('node_modules/bootstrap-sass/assets/javascripts/*.js', 'resources/assets/js/bootstrap');
    // Copy Handlebars's JS
    mix.copy('node_modules/handlebars/dist/*.js', 'resources/assets/js/handlebars');
    // Copy Moment's JS
    mix.copy('node_modules/moment/min/*.js', 'resources/assets/js/moment');
    // Copy Bootstrap Datepicker's JS
    mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/src/js/*.js', 'resources/assets/js/eonasdan-bootstrap-datetimepicker');
    // Build JS
    mix.scripts(
        [
            'jquery-2.2.1.js',
            'bootstrap/bootstrap.js',
            'handlebars/handlebars.js',
            'default.js'
        ],
        'public/js/default.js'
    );
    // Build Admin JS
    mix.scripts(
        [
            'jquery-2.2.1.js',
            'moment/moment.min.js',
            'bootstrap/bootstrap.js',
            'adminlte/app.js',
            'handlebars/handlebars.js',
            'eonasdan-bootstrap-datetimepicker/bootstrap-datetimepicker.js'
        ],
        'public/js/admin.js'
    );
    // Copy Fonts
    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap');
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

    // Create Build Numbers
    mix.version(['css/stylesheet.css', 'css/admin.css', 'js/default.js', 'js/admin.js']);

    // Copy Fonts and Images for Build Numbers
    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/build/fonts/bootstrap');
    mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts');
    mix.copy('public/img', 'public/build/img');
});
