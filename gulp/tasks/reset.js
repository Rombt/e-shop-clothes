import del from "del";
// import fetch from "node-fetch";

export const reset = () => {


    if (app.isWP) {

        const jsonData = app.plugins.fs.readFileSync('gulp/filelist.json', 'utf8');
        // const arr_filesForDell = JSON.parse(jsonData);
        let arr_filesForDell = [];


        JSON.parse(jsonData).forEach(pathToFile => {



            // console.log(pathToFile.replace("gulp\\docs\\", ""));
            // console.log(pathToFile);

        });


        return del(JSON.parse(jsonData));

    } else {

        return del(app.path.clean);
    }




}