// webpack.mix.js

const mix = require('laravel-mix');

// mix.webpackConfig({
   
//     stats: {
//          children: true
//     }
// });

// mix.js('src/app.js', 'dist').setPublicPath('dist');

mix.js('resources/js/app.js', 'public/js')
.js('resources/js/script2.js', 'public/js')
.postCss('resources/css/style2.css', 'public/css');
