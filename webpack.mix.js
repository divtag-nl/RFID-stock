let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        postCss: [
            require('pixrem')()
        ]
    })
    .scripts([
        'node_modules/project-fast/src/assets/js/bundle.js',
        'node_modules/project-fast/src/assets/js/app.min.js'
    ], 'public/backend/js/bundle.js');
