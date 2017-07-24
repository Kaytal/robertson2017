'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    jsFiles = 'js/script.js',
    jsDest = 'js/minify';


gulp.task('default', ['sass', 'sass:watch', 'scripts', 'script:watch', 'browser-sync']);

gulp.task('sass', function() {
   return gulp.src('sass/**/*.scss')
       .pipe(sass().on('error', sass.logError))
       .pipe(autoprefixer())
       .pipe(gulp.dest('./'))
       .pipe(browserSync.stream());
});

gulp.task('scripts', function() {
    return gulp.src(jsFiles)
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest))
        .pipe(browserSync.stream());
});

gulp.task('script:watch', function() {
   gulp.watch('js/*.js', ['scripts']);
});

gulp.task('sass:watch', function () {
    gulp.watch(['sass/**/*.scss', 'sass/*.scss'], ['sass']);
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'robertson2017.dev'
    });
});
