import webpHtmlNosvg from "gulp-webp-html-nosvg";
import versionNumber from "gulp-version-number";
import fileInclude from "gulp-file-include";


export const php = () => {


    return app.gulp.src(app.path.src.php, { base: app.path.srcFolder })
        .pipe(app.plugins.plumber(
            app.plugins.notify.onError({
                title: "PHP",
                message: "Error: <%= error.message %>"
            })))
        .pipe(app.plugins.newer(app.plugins.if(app.isWP, app.path.wp.php, app.path.prod.php)))      // обрабатывать только обновлённые  файлы 
        .pipe(app.plugins.if(app.isProd, fileInclude({
            context: {
                'isProd': app.isProd
            }
        }), fileInclude({
            context: {
                'isProd': false
            }
        })))
        .pipe(app.plugins.replace(/@img\//g, 'img/'))
        .pipe(app.plugins.if(app.isProd, webpHtmlNosvg())) // оборачивает тег img в тег <picture> 
        .pipe(app.plugins.if(app.isProd, versionNumber({
            'value': '%DT%',
            'append': {
                'key': '_v',
                'cover': 0,
                'to': [
                    'css',
                    'js',
                ]
            },
            'output': {
                'file': 'gulp/version.json'
            }
        })))

        .pipe(app.gulp.dest(app.plugins.if(app.isWP, app.path.wp.php, app.path.prod.php)))
        .pipe(app.plugins.if(app.isWP, app.plugins.tap(function (file) {
            file.path ? app.path.wp.arr_processedFiles.push(file.path) : null;
        })))
        .pipe(app.plugins.browsersync.stream());
}