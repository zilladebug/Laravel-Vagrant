const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .sourceMaps()
    .extract(["vue"])
    .version()
    .sass("resources/sass/app.scss", "public/css");

// mix.browserSync("sync.test");
// mix.babel(["first.js", "second.js"], "all.js");
// mix.react("app.jsx", "public/js");

// mix.less("path.less", "public/css/less.css").less(
//     "path2.less",
//     "public/css/less2.css"
// );

// mix.styles(["first.css", "second.css"], "public/css/all.css");
