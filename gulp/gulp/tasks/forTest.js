


// export const forTest = () => {
//    return app.gulp.src(app.path.src.wpPlugins)

//       // .pipe(app.plugins.if(app.isProd, "здесь архивация папки плагина которая должна оказаться в корне темы"))


//       .pipe(app.gulp.dest(app.plugins.if(app.isWP, app.path.wp.files, app.path.prod.files)))
//       .pipe(app.plugins.if(app.isWP, app.plugins.tap(function (file) {
//          file.path ? app.path.wp.arr_processedFiles.push(file.path) : null;
//       })))
// }





//=================== without .pipe  =================

export const forTest = (done) => {

   console.log(" ************* forTest ");



   done();
}