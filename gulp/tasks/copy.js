export const copy = () => {
    return app.gulp.src(app.path.src.files)

        .pipe(app.gulp.dest(app.plugins.if(app.isWP, app.path.wp.files, app.path.prod.files)))
        .pipe(app.plugins.if(app.isWP, app.plugins.tap(function (file) {
            file.path ? app.path.wp.arr_processedFiles.push(file.path) : null;
        })))
}