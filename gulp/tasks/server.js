// для старых версий node.js
// import process from 'process';

// const __filename = {};
// const __dirname = {};

// let vNode = +process.version.slice(1, 3);
// if (vNode < 12) {

//     // let obj_url = await import('url');
//     // let fileURLToPath = obj_url.fileURLToPath;

//     let { fileURLToPath } = await import('url');
//     let { dirname } = await import('path');


//     __filename = fileURLToPath(import.meta.url);
//     __dirname = dirname(__filename);


// }

// import { fileURLToPath } from 'url';
// import { dirname } from 'path';
// const __filename = fileURLToPath(import.meta.url);
// const __dirname = dirname(__filename);






export const server = (done) => {

    let rootFolder = app.path.prodFolder.slice(2);
    let proxyPath = '';

    if (__dirname.includes('OSPanel')) {
        proxyPath = `http://rombt/${app.path.rootFolder}/${rootFolder}`; // домашний комп
    } else {
        proxyPath = `http://web/rombt/${app.path.rootFolder}/${rootFolder}`; // рабочий комп и домашний ноут
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