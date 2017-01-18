module.exports = function (gulp, plugins, paths) {
    return function () {
        gulp.src(paths.scripts)
            .pipe(plugins.concat('scripts.js'))
            .pipe(plugins.uglify())
            .pipe(gulp.dest(paths.js));
    };
};