module.exports = function (gulp, plugins, paths) {
    return function () {
        gulp.src(paths.sass)
            .pipe(plugins.sass())
            .pipe(plugins.pleeease())
            .pipe(gulp.dest(paths.css));
    };
};