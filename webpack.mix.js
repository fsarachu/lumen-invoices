const {mix} = require('laravel-mix');
const path = require('path');
const webpack = require('webpack');

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

mix.webpackConfig({
    resolve: {
        alias: {
            jquery: path.resolve(__dirname, 'node_modules/jquery/src/jquery.js')
        }
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery'
        })
    ]
});

mix.js('resources/assets/js/app.js', 'public/js')
    .styles([
        'resources/assets/semantic/dist/semantic.css',
        'node_modules/semantic-ui-calendar/dist/calendar.css'
    ], 'public/css/app.css')
    .copy('node_modules/semantic-ui/src/themes/default/assets/fonts', 'public/fonts');