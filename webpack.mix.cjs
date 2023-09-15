const mix = require("laravel-mix");

mix.setPublicPath("public")
    .browserSync("127.0.0.1:8000")
    .js("resources/js/app.js", "public/js/app.js")
    .js("resources/js/quiz.js", "public/js/app.js")
    .js("resources/js/admin.js", "public/js/admin.js")
    .sass("resources/scss/app.scss", "public/css/app.css")
    .sass("resources/scss/home.scss", "public/css")
    .sass("resources/scss/auth/register.scss", "public/css/app.css")
    .sass("resources/scss/auth/login.scss", "public/css/app.css")
    .sass("resources/scss/category.scss", "public/css/app.css")
    .sass("resources/scss/admin/admin.scss", "public/css/admin.css")
    .sass("resources/scss/admin/home.scss", "public/css/admin.css")
    .sass("resources/scss/admin/manage_users.scss", "public/css/admin.css")
    .sass("resources/scss/community.scss", "public/css/app.css")
    .sass("resources/scss/quiz.scss", "public/css")
    .sass("resources/scss/profile.scss", "public/css/app.css");
