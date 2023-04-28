import del from "del";
// import fetch from "node-fetch";

export const reset = () => {


    if (app.isWP) {

        let arr_filesForDell = [];
        if (app.plugins.fs.existsSync('gulp/filelist.json')) {

            const jsonData = app.plugins.fs.readFileSync('gulp/filelist.json', 'utf8');
            try {
                JSON.parse(jsonData).forEach(pathToFile => {
                    arr_filesForDell.push(pathToFile.replace("gulp\\docs\\", ""));
                });

                // return del(arr_filesForDell, { force: true });

            } catch (error) {
                console.error('Фаил содержит не правильный JSON:', error.message);
            }
        }
        return del(arr_filesForDell, { force: true });

    } else {

        return del(app.path.clean);
    }


}