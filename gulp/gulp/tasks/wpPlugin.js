


export const wpPlugin = () => {

    app.wpPlugins = true;
    app.isWP = true;


    return app.gulp.src(app.path.src.wpPlugins)


        .on('data', (file) => {
            console.log('1. File in stream:', file.path);

            console.log("app.path.pluginsPath = ", app.path.pluginsPath);
        })


        .pipe(app.gulp.dest(app.path.pluginsPath))
        .pipe(app.plugins.browsersync.stream());
}