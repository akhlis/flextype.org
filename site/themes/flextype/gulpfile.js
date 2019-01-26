//
// Flextype Gulp.js
// (c) Sergey Romanenko <https://github.com/Awilum>
//

var Promise = require("es6-promise").Promise,
    gulp = require('gulp'),
    csso = require('gulp-csso'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass');

gulp.task('flextype-css', function() {
    return gulp.src('assets/scss/flextype.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(csso())
        .pipe(concat('flextype.min.css'))
        .pipe(gulp.dest('assets/dist/css/'));
});

gulp.task('flextype-js', function(){
  return gulp.src(['node_modules/jquery/dist/jquery.slim.min.js', 'node_modules/bootstrap/dist/js/bootstrap.min.js'])
    .pipe(sourcemaps.init())
    .pipe(concat('flextype.min.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('assets/dist/js/'));
});

gulp.task('default', ['flextype-css', 'flextype-js']);
