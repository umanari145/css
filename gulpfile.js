var gulp = require('gulp');
var less = require('gulp-less');

gulp.task('less',function(){
    return gulp.src(['less/css/top.less'])
               .pipe(less())
               .pipe(gulp.dest('less/css'));
});
