var gulp = require('gulp'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	notify = require('gulp-notify'),
	autoprefixer = require('gulp-autoprefixer'),
	path = require('path');

var paths = {
	sass: './sass/',
	scripts: './js/',
};

gulp.task('sass', function() {
	return gulp.src(path.join(paths.sass, 'style.scss'))
		.pipe(concat('style.css'))
		.pipe(sass({ style: 'expanded', sourceComments: 'map', errLogToConsole: true}))
		.pipe(autoprefixer('last 2 version', "> 1%", 'ie 8', 'ie 9'))
		.pipe(gulp.dest('./'))
		// .pipe(notify({ message: 'SASS compiled!' }))
		;
});

gulp.task('scripts', function() {
  return gulp.src(path.join(paths.scripts, '*.js'))
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./'));
	// .pipe(notify({ message: 'JS compiled!' }))
	;
});


gulp.task('watch', function() {
	gulp.watch(path.join(paths.sass, '**/*.scss'), ['sass']);
	gulp.watch(path.join(paths.scripts, '*.js'), ['scripts']);

});


gulp.task('default', ['sass', 'scripts', 'watch'], function() {

});