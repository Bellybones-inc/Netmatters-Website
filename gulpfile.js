var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('styles', function(cb) {
  gulp.src('scss/styles.css')
    .pipe(autoprefixer('ie 10', 'ie 11'))
    .pipe(gulp.dest('build'));
    cb();
});
