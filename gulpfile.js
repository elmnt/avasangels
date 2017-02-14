'use strict';

// ----------- Dependencies

var gulp        = require('gulp'),
    concat      = require('gulp-concat'),
    uglify      = require('gulp-uglify'),
    rename      = require('gulp-rename'),
    browserSync = require('browser-sync'),
    sass        = require('gulp-sass'),
    del         = require('del'),
    cache       = require('gulp-cache');

// ----------- Variables

var reload    = browserSync.reload,
    themePath = 'wp-content/themes/ava',
    jsPath    = 'wp-content/themes/ava/js';

// ----------- Server

gulp.task('browser-sync', function() {
  var files = [
  jsPath + '/ava.min.js',
  themePath + '/style.css',
  themePath + '/**/*.php'
  ];
  browserSync.init(files, {
  proxy: 'avasangels.dev:8888',
  notify: false
  });
});

// ----------- Concat & Minify JS

gulp.task('concatScripts', function() {
  return gulp.src([
    jsPath + '/elmenu.js',
    jsPath + '/skip-link-focus-fix.js',
    jsPath + '/picturefill.js'
    //jsPath + '/customizer.js'
  ])
  .pipe(concat('ava.js'))
  .pipe(gulp.dest(jsPath));
});

// Now minify it
gulp.task('minifyScripts', ['concatScripts'], function() {
  return gulp.src(jsPath + '/ava.js')
    //.pipe(maps.init())
    .pipe(uglify())
    .pipe(rename('ava.min.js'))
    //.pipe(maps.write('./'))
    .pipe(gulp.dest(jsPath));
});

// ----------- Watch Sass files

gulp.task('sass', function () {
  return gulp.src(themePath + '/scss/*.scss')
    .pipe(sass())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest(themePath))
    .pipe(reload({stream:true}));
});

// ----------- Cleanup

gulp.task('clean', function(callback) {
  del(themePath + '/style.css');
  del(jsPath + '/ava.js');
  del(jsPath + '/ava.min.js');
  return cache.clearAll(callback);
});

// ----------- Default

gulp.task('default', ['clean', 'minifyScripts', 'sass', 'browser-sync'], function () {
  gulp.watch(themePath + '/scss/**/*.scss', ['sass']);
  gulp.watch(jsPath + '/*.js', ['minifyScripts']);
});
