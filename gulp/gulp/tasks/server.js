import process from 'process';

let absPath = process.cwd();


export const server = (done) => {

    let rootFolder = app.path.prodFolder.slice(2);
    let proxyPath = '';


    if (absPath.includes('OSPanel')) {
        proxyPath = `http://ms/`;
    } else {        // рабочий комп и домашний ноут
        proxyPath = `http://web/ms/`;
    }

    app.plugins.browsersync.init({
        proxy: proxyPath,
        open: false,
    })
}