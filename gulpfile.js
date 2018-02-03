var gulp = require('gulp');
var less = require('gulp-less');
var ejs = require("gulp-ejs");
var rename = require("gulp-rename");
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

gulp.task('original_compile_watch',function(){
    return gulp.watch(['bulma/sass/*.*'],['original_compile'])
});


gulp.task('ejs', function(){
  gulp.src('ejssample/src/ejs/index.ejs')
    .pipe(ejs()) // 拡張子の指定
	.pipe(rename({extname:'.html'}))
    .pipe(gulp.dest('ejssample/build/'));
});
