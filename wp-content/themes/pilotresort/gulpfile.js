


var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;


//browser sync
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "http://localhost/pilot-beach-resort/"
    });
});

gulp.task('sass', function(){
   gulp.src('SCSS/*.scss')
   .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: "compressed"}).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream());
});

gulp.task('watch', ['browser-sync' ,'sass'] ,function(){
    gulp.watch('SCSS/*.scss' ,['sass'])
});

gulp.task('default', ['browser-sync' ,'sass' , 'watch']);