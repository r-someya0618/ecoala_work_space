const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
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
