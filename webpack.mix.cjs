// webpack.mix.js

let mix = require('laravel-mix');

mix.js('resources/js/*', 'public/js/app.js')
    .css('resources/css/app.css', 'public/css/app.css')
    .setPublicPath('public');