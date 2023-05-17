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
        styles: `${themePath}/assets/styles/`,
        php: `${themePath}`,
        images: `${themePath}/assets/img/`,
        fonts: `${themePath}/assets/fonts/`,
        files: `${themePath}/files/`,
        svgicons: `${themePath}/assets/img/`, // так же как и файлы шрифтов иканки генерируются только один раз, но переносить их нужно при каждой сборкой        
    },
    prod: {
        js: `${prodFolder}/js/`,
        styles: `${prodFolder}/styles/`,
        php: `${prodFolder}/`,
        images: `${prodFolder}/img/`,
        fonts: `${prodFolder}/fonts/`,
        files: `${prodFolder}/files/`,
        svgicons: `${srcFolder}/img/`, // так же как и файлы шрифтов иканки генерируются только один раз, но переносить их нужно при каждой сборкой
    },
    src: {
        php: [
            `${srcFolder}/*.{php,html,txt}`,
            `${srcFolder}/template-parts/**/*`,
        ],
        wpPlugins: `${srcFolder}/plugins/**/*.*`,
        less: `${srcFolder}/styles/main-style.less`,
        scss: `${srcFolder}/styles/main-style.scss`,
        js: `${srcFolder}/js/app.js`,
        images: `${srcFolder}/img/**/*.{jpg,jpeg,png,gif,webp}`, // добавить форматы при необходимости
        svg: `${srcFolder}/img/**/*.svg`,
        files: `${srcFolder}/files/**/*.*`,
        svgicons: `${srcFolder}/svgicons/*.svg`,
    },
    watch: {
        php: `${srcFolder}/**/*.{php,html,txt}`, // слежу за всеми 
        styles: `${srcFolder}/styles/**/*.{scss,less}`,
        js: `${srcFolder}/js/**/*.js`,
        images: `${srcFolder}/img/**/*.{jpg,jpeg,png,svg,gif,ico,webp}`,
        files: `${srcFolder}/files/**/*.*`,
        // wp: `${themePath}/functions.php`,       // добавить файлы для отслеживания
    },
    wp_watch: [             // добавдять файлы для отслеживания 
        `${themePath}/functions.php`,
        `${themePath}/inc/redux-options.php`,
        // `${srcFolder}/plugins/**/*.*`,       // дублирует  watch.php
    ],
    rootFolder: rootFolder,
    prodFolder: prodFolder,
    srcFolder: srcFolder,
    themePath: themePath,
    pluginsPath: pluginsPath,
    clean: prodFolder,
    ftp: 'htdocs', // указать целевую папку на сервере, есле её нет то она будет создана автоматически, пусто -- корневая папка сервера
}