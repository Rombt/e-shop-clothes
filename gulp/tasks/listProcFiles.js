import fs from "fs";




export const listProcFiles = (done) => {

   fs.writeFile('gulp/filelist.json', JSON.stringify(app.path.wp.processedFiles), (err) => {
      if (err) throw err;
      console.log('Массив успешно записан в файл!');
   });

   done();
}











// export const listProcFiles = () => {


//    console.log("+app.path.wp.processedFiles = ", app.path.wp.processedFiles);


//    return () => {
//       fs.writeFile('gulp/filelist.json', JSON.stringify(app.path.wp.processedFiles), (err) => {
//          if (err) throw err;
//          console.log('Массив успешно записан в файл!');
//       });
//    }
// }


