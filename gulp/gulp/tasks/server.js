import process from 'process';

let absPath = process.cwd();


export const server = (done) => {

    let rootFolder = app.path.prodFolder.slice(2);
    let proxyPath = '';


    if (absPath.includes('OSPanel')) {
        proxyPath = `http://rombt/${app.path.rootFolder}/${rootFolder}`; // домашний комп
    } else {        // рабочий комп и домашний ноут
        // proxyPath = `http://web/rombt/${app.path.rootFolder}/${rootFolder}`; 
        // proxyPath = `http://web/ms/${app.path.rootFolder}/${rootFolder}`; 
        proxyPath = `http://web/ms/`;
    }

    app.plugins.browsersync.init({
        proxy: proxyPath,
        open: false,
        // server: {
        //     baseDir: `${app.path.prod.php}`
        // },
        // notify: false,
        // port: 3000,
    })
}