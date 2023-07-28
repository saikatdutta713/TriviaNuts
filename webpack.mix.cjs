const mix = require("laravel-mix");

mix.setPublicPath("public")
    .browserSync("127.0.0.1:8000")
    .js("resources/js/app.js", "public/js/app.js")
    .sass("resources/scss/app.scss", "public/css/app.css")
    .sass("resources/scss/home.scss", "public/css")
    .sass("resources/scss/category.scss", "public/css/app.css")
    .sass("resources/scss/question.scss", "public/css");
