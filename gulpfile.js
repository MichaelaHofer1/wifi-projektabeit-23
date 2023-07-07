const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

gulp.task('css-style', () =>
    gulp.src('./themes/src/assets/scss/style.scss')
        .pipe(sass.sync({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(postcss([ autoprefixer() ]))
        .pipe(gulp.dest('./themes/dist'))
);

gulp.task('watch', () =>
        gulp.watch('./themes/src/assets/scss/**/*.scss', gulp.series('css-style'))
);

gulp.task('development', gulp.series('watch'));