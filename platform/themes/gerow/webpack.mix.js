const mix = require('laravel-mix')
const path = require('path')

const directory = path.basename(path.resolve(__dirname))
const source = `platform/themes/${directory}`
const dist = `public/themes/${directory}`

mix
    .sass(`${source}/assets/sass/style.scss`, `${dist}/css`)
    .sass(`${source}/assets/sass/rtl.scss`, `${dist}/css`)
    .js(`${source}/assets/js/main.js`, `${dist}/js`)
    .js(`${source}/assets/js/script.js`, `${dist}/js`)
    .js(`${source}/assets/js/page.js`, dist + '/js')
    .js(`${source}/assets/js/shortcode.js`, dist + '/js')
    .js(`${source}/assets/js/gsap-animation.js`, dist + '/js')

if (mix.inProduction()) {
    mix
        .copy(`${dist}/css/style.css`, `${source}/public/css`)
        .copy(`${dist}/css/rtl.css`, `${source}/public/css`)
        .copy(`${dist}/js/main.js`, `${source}/public/js`)
        .copy(`${dist}/js/script.js`, `${source}/public/js`)
        .copy(`${dist}/js/page.js`, `${source}/public/js`)
        .copy(`${dist}/js/shortcode.js`, `${source}/public/js`)
        .copy(`${dist}/js/gsap-animation.js`, `${source}/public/js`)
}
