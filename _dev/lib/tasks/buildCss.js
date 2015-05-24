var gulp          = require('gulp'),
    config        = require('../../config'),
    plumber       = require('gulp-plumber'),
    compass       = require('gulp-compass'),
    autoprefixer  = require('gulp-autoprefixer'),
    path          = require('path');
    //dirUtils      = require('../utils/dirUtils');


gulp.task('build-css', function(){
  gulp.src(config.stylesheetsDir + 'application.sass')
    .pipe(plumber())
    .pipe(
      compass({
        config_file: './config.rb',
        sass: config.stylesheetsDir,
        style: 'expanded', // compressed, expanded
        css: config.publicCssDir,
        image: config.publicImgDir,
        comments: false
      })
    ).on('error', console.log)

    .pipe(autoprefixer({
      browsers: ['last 6 versions']
    }))

    .pipe(gulp.dest(config.publicCssDir))
});