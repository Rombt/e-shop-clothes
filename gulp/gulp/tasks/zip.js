import del from "del";
import zipPlugin from "gulp-zip";

export const zip = () => {
    del(`./${app.path.wp.themeName}.zip`);
    return app.gulp.src(app.plugins.if(app.isWP, [`${app.path.themePath}/**/*.*`, `!${app.path.themePath}/${app.path.rootFolder}/**/*.*`], `${app.path.prodFolder}/**/*.*`), {})
        .pipe(app.plugins.plumber(app.plugins.notify.onError({ title: "ZIP", message: "Error: <%= error.message %>" })))

        .pipe(zipPlugin(`${app.path.wp.themeName}.zip`))
        .pipe(app.gulp.dest('./'));
}