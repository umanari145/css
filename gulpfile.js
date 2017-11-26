var gulp = require('gulp');
var less = require('gulp-less');

var gulp_sass = require('gulp-sass');

gulp.task('original_less',function(){
    return gulp.src(['less/css/top.less'])
               .pipe(less())
               .pipe(gulp.dest('less/css'));
});

gulp.task('original_compile',function(){
    return gulp.src(['bulma/sass/main.sass'])
               .pipe(gulp_sass({outputStyle: 'compressed'}))
               .pipe(gulp.dest('bulma/css'));
});
