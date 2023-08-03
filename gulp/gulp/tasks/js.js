import webpackStream from "webpack-stream";

export const js = () => {
    return app.gulp.src(app.path.src.js, {
        sourcemaps: global.app.isDev,
        allowEmpty: true,
        base: app.path.srcFolder,
    })
        .pipe(app.plugins.plumber(
            app.plugins.notify.onError({
                title: "JS",
                message: "Error: <%= error.message %>"
            })))
        .pipe(webpackStream({
            mode: app.isProd ? 'production' : 'development',
            entry: {
                admin: `${app.path.srcFolder}/admin/assets/js/admin.js`, // Входная точка для фронтенда
                app: app.path.src.js, // Входная точка для админ панели
            },
            output: {
                filename: '[name].min.js',
            }
        }))
        .pipe(app.plugins.if(
            app.isWP && '**/app.min.js',
            app.gulp.dest(app.path.wp.js.app)
        ))
        .pipe(app.plugins.if(
            app.isWP && '**/admin.min.js',
            app.gulp.dest(app.path.wp.js.admin)
        ))

        // app.gulp.dest(app.path.prod.js))     // для вёрстки!!!

        .pipe(app.plugins.if(app.isWP, app.plugins.tap(function (file) {
            file.path ? app.path.wp.arr_processedFiles.push(file.path) : null;
        })))
        .pipe(app.plugins.browsersync.stream());
}