import dartSasss from 'sass';
import gulpSasss from 'gulp-sass';
import less from 'gulp-less';
import rename from 'gulp-rename';
import cleanCss from 'gulp-clean-css'
import webpCss from 'gulp-webpcss' // в зависимости об браузера(!) в файл стилей картинки либо в фотмате webp либо обычные требует дополнительного js кода
import autoprefixer from 'gulp-autoprefixer'
import groupCssMediaQueries from 'gulp-group-css-media-queries'

const sass = gulpSasss(dartSasss);

export const styles = () => {


    return app.gulp.src(app.plugins.if(global.app.isSASS, app.path.src.scss, app.path.src.less), {
        sourcemaps: app.isDev,
        "allowEmpty": true,
        base: app.path.srcFolder,
    })
        .pipe(app.plugins.plumber(app.plugins.notify.onError({ title: "Styles", message: "Error: <%= error.message %>" })))

        .pipe(app.plugins.if(global.app.isSASS, sass({ outputStyle: 'expanded' }), less()))

        .pipe(app.plugins.if(app.isProd, groupCssMediaQueries()))
        .pipe(app.plugins.if(app.isProd, webpCss({
            webpClass: ".webp",
            nowebpClass: ".no-webp",
        })))
        .pipe(app.plugins.if(app.isProd, autoprefixer({
            grid: true,
            overrideBrowsersList: ["last 3 versions"],
            cascad: true,
        })))

        .pipe(app.plugins.if(app.toCleanCss, cleanCss())) // для флага --valid
        .pipe(rename({ extname: ".min.css" }))

        .pipe(app.gulp.dest(app.plugins.if(app.isWP, app.path.wp.styles, app.path.prod.styles)))
        .pipe(app.plugins.if(app.isWP, app.plugins.tap(function (file) {
            file.path ? app.path.wp.arr_processedFiles.push(file.path) : null;
        })))
        .pipe(app.plugins.browsersync.stream());
}