var gulp = require('gulp')
, uglify = require('gulp-uglify')
, rename = require('gulp-rename');

gulp.task('scripts', function(){
  gulp.src('./src/bootstrap-tab-ext.js')
    .pipe(uglify())
    .pipe(rename('toggle-summary.min.js'))
    .pipe(gulp.dest('./'))
});

gulp.task('default', ['scripts']);
