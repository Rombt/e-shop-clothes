export const listProcFiles = (done) => {

   /*
      т.к. файлы созданные сборкой должны быть в каталоге темы в перемешку с стандартными файлами темы
   
   */


   if (Array.isArray(app.path.wp.processedFiles)) {
      app.plugins.fs.writeFile('gulp/filelist.json', JSON.stringify(app.path.wp.arr_processedFiles), (err) => {
         // app.plugins.fs.writeFile('gulp/filelist.json', JSON.stringify(app.path.wp.arr_processedFiles), (err) => {
         if (err) throw err;
         console.log('Массив успешно записан в файл!');
      });
   }

   done();
}