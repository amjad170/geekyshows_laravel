// webpack.mix.js

const mix = require('laravel-mix');

// mix.webpackConfig({
   
//     stats: {
//          children: true
//     }
// });

// mix.js('src/app.js', 'dist').setPublicPath('dist');

mix.js('resources/js/app.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css');

