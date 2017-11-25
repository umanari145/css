var gulp = require('gulp');

//通常のタスク(下記コマンドでコピーできる)
gulp.task('aaaa',function(){
    return gulp.src([
       'resource1/*'
    ]).pipe(gulp.dest('resource2'));
});
