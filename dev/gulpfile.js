var gulp = require('gulp');
var plugins = require('gulp-load-plugins')();

var paths = {
	sass: './assets/sass/**/*.scss',
	scripts: './assets/js/**/*.js',
	css: '../public/assets/css/',
	js: '../public/assets/js/'
}


function getTask(task) {
    return require('./tasks/' + task)(gulp, plugins, paths);
}

gulp.task('scripts', getTask('project-javascript'));
gulp.task('sass', getTask('project-sass'));

gulp.task('watch', function () {
    gulp.watch(paths.scripts, ['scripts']);
    gulp.watch(paths.sass, ['sass']);
});