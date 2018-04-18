// Define some plugins!
const gulp = require('gulp');
const sass = require('gulp-sass');
const cssnano = require('gulp-cssnano');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

const path = {
    css: './css/',
    js: './js/'
};

const files = {
    sass: ['style.scss'],
    css: ['bootstrap.min.css','font-awesome.min.css', 'style.css'],
    js: ['Button.js', 'Mail.js', 'Typing.js', 'main.js']
};

const src = {
    sass: files.sass.map(function (item) {
        return path.css + item
    }),
    css: files.css.map(function (item) {
        return path.css + item
    }),
    js: files.css.map(function (item) {
        return path.js + item
    })
};

/* Compile Sass. */

gulp.task('sass', function () {
    gulp.src(src.sass)                             // Create a stream in the directory where our Sass files are located.
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError))    // Compile Sass into style.css.
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.css));                     // Write style.css to the project's directory.
    gulp.start('concat');
});

/* Concatenate Css. */

gulp.task('concat', function () {
    return gulp.src(src.css)                             // Create a stream in the directory where our Sass files are located.
        .pipe(sourcemaps.init())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: true
        }))
        .pipe(concat('index.css'))
        .pipe(cssnano())                                 // Minify and optimize style.css
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.css));                     // Write style.css to the project's directory.
});

/* Compile js. */

gulp.task('babel', function () {
    return gulp.src(src.js)                             // Create a stream in the directory where our Sass files are located.
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(concat('index.js'))
        .pipe(uglify())                                 // Minify and optimize
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.js));                      // Write index.js to the project's directory.
});

/* Watch the directory for changes. */

gulp.task('watch', function() {
  gulp.watch('./css/*.scss', ['sass']);                 // If a file changes, re-run 'sass'
  gulp.watch('./js/*.js', ['babel']);                   // If a file changes, re-run 'babel'
});