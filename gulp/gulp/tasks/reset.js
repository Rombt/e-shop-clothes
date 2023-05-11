


export const reset = () => {


    if (app.isWP) {

        let arr_filesForDell = [];
        if (app.plugins.fs.existsSync('gulp/filelist.json')) {

            const jsonData = app.plugins.fs.readFileSync('gulp/filelist.json', 'utf8');
            try {
                JSON.parse(jsonData).forEach(pathToFile => {
                    arr_filesForDell.push(pathToFile.replace("gulp\\docs\\", ""));
                });

            } catch (error) {
                console.error('Фаил содержит не правильный JSON:', error.message);
            }
        }

        return app.plugins.del(arr_filesForDell, { force: true });

    } else {

        return app.plugins.del(app.path.clean);
    }


}