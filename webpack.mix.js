let mix = require('laravel-mix');
let tailwind = require('tailwindcss');
let build = require('./tasks/build.js');
require('laravel-mix-purgecss');

// mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch([
            'source/**/*.md',
            'source/**/*.php',
            '!source/**/_tmp/*',
            'source/_assets/*.css',
            'source/_assets/*.js',
            'source/_assets/*.vue'
        ]),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .postCss('source/_assets/css/main.css', 'css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwind('./tailwind.config.js')
        ]
    });

if( mix.inProduction() ) {
    mix.purgeCss({
        enabled: true,
        folders: ['source'],
    })
    .version();
}