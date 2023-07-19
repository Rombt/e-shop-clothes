
export const copy = (done) => {

   if (app.path.src.files.length == 0) {
      return done();
   }

   return app.gulp.src(app.path.src.files, { base: app.path.srcFolder })        // параметр base позволяет  сохранить структуру папок
      .pipe(app.gulp.dest(app.plugins.if(app.isWP, app.path.wp.files, app.path.prod.files)))
      .pipe(app.plugins.if(app.isWP, app.plugins.tap(function (file) {
         file.path ? app.path.wp.arr_processedFiles.push(file.path) : null;
      })))
}
