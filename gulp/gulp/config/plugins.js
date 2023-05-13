import replace from "gulp-replace"; // поиск и замена по регуляракам
import plumber from "gulp-plumber"; // оброботка ошибок
import notify from "gulp-notify"; // вывод соообщений об ошибках в windows!
import browsersync from "browser-sync";
import newer from "gulp-newer";
import ifPugin from "gulp-if";
import tap from "gulp-tap";
import fs from "fs";
import * as nodePath from 'path';

import del from "del";


export const plugins = {
    replace: replace,
    plumber: plumber,
    notify: notify,
    browsersync: browsersync,
    newer: newer,
    if: ifPugin,
    tap: tap,
    nodePath: nodePath,
    fs: fs,
    del: del,
}