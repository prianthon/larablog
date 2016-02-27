var gulp = require('gulp');
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
 gulp.task("copyfiles", function() {

   gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
      .pipe(gulp.dest("resources/assets/js/"));

   gulp.src("vendor/bower_dl/bootstrap/less/**")
      .pipe(gulp.dest("resources/assets/less/bootstrap"));

   gulp.src("vendor/bower_dl/bootstrap/dist/js/bootstrap.js")
      .pipe(gulp.dest("resources/assets/js/"));

   gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
      .pipe(gulp.dest("public/assets/fonts"));
 });

elixir(function(mix) {
    //mix.sass('app.scss');
    //combine scripts
    mix.scripts([
      'js/jquery.js',
      'js/bootstrap.js',
    ],
    'public/assets/js/admin.js',
    'resources/assets'
  );

  //compile less
  mix.less('admin.less', 'public/assets/css/admin.css');
});
