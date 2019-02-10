const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const runSequence = require('run-sequence');
const pug = require('gulp-pug');
const gulp_sass = require('gulp-sass');
const config = require('./config.js');
const del = require( 'del' );

//sass コンパイル
//ここをcompressedだと圧縮してcssがはかれます。
gulp.task('sass',() => {
    return gulp.src(config.css.src)
          .pipe(gulp_sass({outputStyle: 'expanded'}))
          .pipe(gulp.dest(config.css.dest));
});

gulp.task('pug', () => {
  return gulp.src(config.html.src)
        .pipe(pug({pretty:true}))
        .pipe(gulp.dest(config.html.dest));
});

gulp.task( 'clean', del.bind( null, [config.css.dest,'index.html'] ) );

//対象ファイルが更新されたらそれぞれのメソッドを更新
gulp.task('watch', () => {
  let watchList = [
    config.css.watch,
    config.html.src
  ];
  gulp.watch(config.css.src, ['sass']);
  gulp.watch(config.html.src, ['pug']);

  gulp.watch( watchList , () => {
    browserReload()
  });
});

//ホットロードの立ち上げ
gulp.task('server', () => {
  browserSync.init({
      server: {
        baseDir:config.dirname
      }
  });
});

//リロード
const browserReload = function() {
  browserSync.reload()
}

gulp.task('default', () => {
  return runSequence(
    'sass',
    'pug',
    'server',
    'watch'
  );
})
