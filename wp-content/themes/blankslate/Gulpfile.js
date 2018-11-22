var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

gulp.task('sass', function() {
    return gulp.src('./sass/main.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'sass:watch']);