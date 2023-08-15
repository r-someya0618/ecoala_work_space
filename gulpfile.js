const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleancss = require('gulp-clean-css');
const bulkSass = require('gulp-sass-glob-use-forward');

gulp.task('sass', function (done) {
  gulp
    .src(['./scss/**/*.scss', './scss/**/_*.scss'])
    .pipe(bulkSass())
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(gulp.dest('.'));
  done();
});

gulp.task('watch', function () {
  gulp.watch(['./scss/**/*.scss', './scss/**/_*.scss'], gulp.task('sass'));
});

gulp.task('cleancss', function () {
  return (
    gulp
      //CSSファイルの参照
      .src('./style.css')
      //CSS圧縮の実行
      .pipe(cleancss())
      //書き出し
      .pipe(gulp.dest('./minified-css'))
  );
});
