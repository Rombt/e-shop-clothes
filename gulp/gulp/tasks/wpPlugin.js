export const wpPlugin = () => {

    app.wpPlugins = true;
    app.isWP = true;


    return app.gulp.src(app.path.src.wpPlugins)
        .pipe(app.gulp.dest(app.path.pluginsPath))
        .pipe(app.plugins.tap(function (file) {
            file.path ? app.path.wp.arr_processedFiles.push(file.path) : null;
        }))
}