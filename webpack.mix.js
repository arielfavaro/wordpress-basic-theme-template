let mix = require('laravel-mix');

let productionSourceMaps = false;


// TODO decide sass, postcss with sass, tailwind or bootstrap

mix.js('assets/js/app.js', './')
    .sass('assets/sass/app.scss', './style.css').sourceMaps(productionSourceMaps, 'source-map');

mix.options({
    processCssUrls: false,
});
