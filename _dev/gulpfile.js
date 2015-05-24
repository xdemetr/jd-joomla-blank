var gulp 		= require('gulp'),
		config	= require('./config.js'),
    plumber       = require('gulp-plumber'),
		requireDir  = require('require-dir'),
    runSequence = require('run-sequence');



requireDir('./lib/tasks', {
  recurse: true
});

gulp.task('default', ['start']);


gulp.task('start', function(){

  gulp.watch(config.stylesheetsDir + '**/*.sass', function(){
    console.log('SASS changed');
    runSequence('build-css');
  });

  gulp.watch(config.javascriptsDir + '**/*.coffee', function(){
    console.log('CoffeeScript changed');
    runSequence('build-app-js');
  });


});

