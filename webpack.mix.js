const mix = require('laravel-mix');

mix.setPublicPath('resources/dist');
mix.js('resources/js/ghostwriter.js', 'js');
