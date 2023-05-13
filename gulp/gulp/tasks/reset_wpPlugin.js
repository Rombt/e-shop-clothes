


export const resetWpPlugin = () => {


    return app.plugins.del(app.path.pluginsPath, { force: true });


}