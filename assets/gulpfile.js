var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var cssnano = require('gulp-cssnano');

// gulp.task('dist-css', function() {
//     return gulp.src('dist/main.css')
//         .pipe(cssnano())
//         .pipe(gulp.dest('dist/main.min.css'));
// });

gulp.task('build', function(){
  return gulp.src('styles/main.scss')
    .pipe(sass())
    .pipe(cssnano())
    .pipe(gulp.dest('dist'))
});


gulp.task('scss', function(){
  return gulp.src('styles/main.scss')
    .pipe(sass())
    .pipe(gulp.dest('dist'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('watch', ['browserSync'], function (){
  gulp.watch('styles/**/*.scss', ['scss']); 
})

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: './'
    },
  })
})