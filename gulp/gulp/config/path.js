import * as nodePath from 'path';


const rootFolder = nodePath.basename(nodePath.resolve());
const prodFolder = './docs'; //  dist заменил не docs для git pages
const srcFolder = './src';

const themePath = `..`;
const themeName = nodePath.basename(nodePath.dirname(nodePath.resolve()));
const wpPluginName = `${themeName}-core`;
const pluginsPath = nodePath.join(themePath, '..', '..', `plugins/${wpPluginName}`);

export const path = {
    wp: {
        themeName: `${themeName}`,
        wpPluginName: `${wpPluginName}`,
        arr_processedFiles: [],
        js: `${themePath}/assets/js/`,
        styles: `${themePath}/`,
        php: `${themePath}`,
        images: `${themePath}/`,
        fonts: `${themePath}/`,
        files: `${themePath}/`,
        svgicons: `${themePath}/`, // так же как и файлы шрифтов иканки генерируются только один раз, но переносить их нужно при каждой сборкой        
    },
    prod: {
        js: `${prodFolder}/js/`,
        styles: `${prodFolder}/styles/`,
        php: `${prodFolder}/`,
        images: `${prodFolder}/img/`,
        fonts: `${prodFolder}/fonts/`,
        files: `${prodFolder}/`,
        svgicons: `${srcFolder}/img/`, // так же как и файлы шрифтов иканки генерируются только один раз, но переносить их нужно при каждой сборкой
    },
    src: {
        php: [
            `${srcFolder}/*.{php,html,txt}`,
            `${srcFolder}/template-parts/**/*`,
        ],
        wpPlugins: `${srcFolder}/plugins/**/*.*`,
        less: [
            `${srcFolder}/assets/styles/main-style.less`,
            `${srcFolder}/admin/assets/css/admin-main-style.less`,
        ],
        scss: [
            `${srcFolder}/assets/styles/main-style.scss`,
            `${srcFolder}/admin/assets/css/main-style.scss`,
        ],
        js: `${srcFolder}/assets/js/app.js`,
        images: [   // добавить форматы при необходимости
            `${srcFolder}/assets/img/**/*.{jpg,jpeg,png,gif,webp,html}`,
            `${srcFolder}/admin/assets/img/**/*.{jpg,jpeg,png,gif,webp}`,
        ],
        svg: [
            `${srcFolder}/assets/img/icons/**/*.svg`,
            `${srcFolder}/admin/assets/img/icons/**/*.svg`,
        ],
        files: [     // для тех файлов которые не попадают в перечисленные выше пути и которые  нужно переместить без обработки
            `${srcFolder}/admin/assets/js/**/*.js`,
        ],
        svgicons: [
            `${srcFolder}/assets/svgicons/*.svg`,
            `${srcFolder}/admin/assets/svgicons/*.svg`,
        ],
    },
    watch: {
        php: `${srcFolder}/**/*.{php,html,txt}`, // слежу за всеми 
        styles: `${srcFolder}/**/*.{scss,less}`,
        js: `${srcFolder}/**/*.js`,
        images: `${srcFolder}/**/*.{jpg,jpeg,png,svg,gif,ico,webp}`,
        files: [        // для тех файлов которые не попадают в перечисленные выше пути и которые  нужно переместить без обработки
            `${srcFolder}/admin/assets/js/**/*.js`,
        ],
    },
    wp_watch: [             // добавдять файлы для отслеживания 
        `${themePath}/functions.php`,
        `${themePath}/inc/redux-options.php`,
        `${srcFolder}/plugins/**/*.*`,       // дублирует watch.php  нужно для того что бы запускать task wpPlugin отдельно от task php  
    ],
    rootFolder: rootFolder,
    prodFolder: prodFolder,
    srcFolder: srcFolder,
    themePath: themePath,
    pluginsPath: pluginsPath,
    clean: prodFolder,
    ftp: 'htdocs', // указать целевую папку на сервере, есле её нет то она будет создана автоматически, пусто -- корневая папка сервера
}