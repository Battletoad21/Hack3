var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/web')
    .addEntry('app', './assets/js/app.js')
    // will output as web/build/header.css
    .addEntry('header', './assets/scss/header.scss')
    // will output as web/build/index.css
    .addEntry('index', './assets/scss/index.scss')
    // will output as web/build/accueil.css
    .addEntry('accueil', './assets/scss/accueil.scss')
    .addEntry('style', './assets/scss/style.scss')
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSassLoader();

module.exports = Encore.getWebpackConfig();
