export const listProcFiles = (done) => {




    app.plugins.fs.writeFile('gulp/filelist.json', JSON.stringify(app.path.wp.processedFiles), (err) => {
        if (err) throw err;
        console.log('Массив успешно записан в файл!');
    });

    done();
}