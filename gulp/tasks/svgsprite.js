import svgSprite from "gulp-svg-sprite";


export const createSvgSprite = () => {
    return app.gulp.src(app.path.src.svgicons)
        .pipe(app.plugins.plumber(app.plugins.notify.onError({ title: "SVG", message: "Error: <%= error.message %>" })))
        .pipe(svgSprite({
            mode: {
                stack: {
                    sprite: '../icons/icons.svg',
                    example: true, // создаёт html страницу с примерами иканак
                }
            },
        }))

        .pipe(app.plugins.if(app.isWP, app.plugins.tap(function (file) {
            app.path.wp.processedFiles.push(file.path);
        })))
        .pipe(app.gulp.dest(app.path.prod.svgicons))
}