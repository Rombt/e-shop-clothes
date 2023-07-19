import webpackStream from "webpack-stream";

export const js = () => {
    return app.gulp.src(app.path.src.js, {
        sourcemaps: global.app.isDev,
        allowEmpty: true,
    })
        .pipe(app.plugins.plumber(
            app.plugins.notify.onError({
                title: "JS",
                message: "Error: <%= error.message %>"
            })))
        .pipe(webpackStream({
            mode: app.isProd ? 'production' : 'development',
            output: {
                filename: 'app.min.js',
            }
        }))
        .pipe(app.gulp.dest(app.plugins.if(app.isWP, app.path.wp.js, app.path.prod.js)))
        .pipe(app.plugins.if(app.isWP, app.plugins.tap(function (file) {
            file.path ? app.path.wp.arr_processedFiles.push(file.path) : null;
        })))
        .pipe(app.plugins.browsersync.stream());
}