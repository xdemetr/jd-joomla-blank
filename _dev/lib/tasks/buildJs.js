var gulp          = require('gulp'),
    config        = require('../../config'),
    //fs          = require('fs'),
    browserify  = require('browserify'),
    source      = require('vinyl-source-stream');
//concat      = require('gulp-concat'),
    //uglify      = require('gulp-uglifyjs');

gulp.task('build-app-js', function(){
  console.log('Saving app js info');
  console.log('Building app js info');
  browserify({
    entries: ['./' + config.javascriptsDir + 'application.coffee'],
    extensions: ['.coffee', '.js']
  }).transform('coffeeify')
    .bundle()
    .on('error', function(err){
      console.log(err.message);
    })
    .pipe(source('script2.js'))
    .pipe(gulp.dest(config.publicJsDir))
    //.pipe(uglify('script.min.js'))
    //.pipe(gulp.dest(config.publicJsDir));
});

