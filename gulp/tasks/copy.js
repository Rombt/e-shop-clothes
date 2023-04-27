export const copy = () => {
    return app.gulp.src(app.path.src.files)

        .pipe(app.gulp.dest(app.path.prod.files))
        .pipe(app.plugins.if(app.isWP, app.plugins.tap(function(file) {
            app.path.wp.processedFiles.push(file.path);
        })))
}