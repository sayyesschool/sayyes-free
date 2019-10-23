const gulp = require('gulp');
const sass = require('gulp-sass');

function buildSass() {
    return gulp.src('./src/styles/index.scss')
        .pipe(sass({
            includePaths: ['./node_modules/'],
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('./public/css/'));
}

gulp.watch('./src/**/*.scss', buildSass);

module.exports.default = buildSass;