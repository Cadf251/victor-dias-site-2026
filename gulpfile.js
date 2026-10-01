// -------------------------
// IMPORTS
// -------------------------
const { src, dest, watch, series, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cleanCSS = require("gulp-clean-css");
const concat = require("gulp-concat");
const terser = require("gulp-terser");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const sourcemaps = require("gulp-sourcemaps");
const esbuild = require("esbuild");
const browserSync = require('browser-sync').create();
const svgSprite = require('gulp-svg-sprite');
const gulpIf = require('gulp-if');

// -------------------------
// PATHS
// -------------------------
const paths = {
  scss: "src/scss/**/*.scss",
  js: "src/js/**/*.js",
  img: "src/img/**/*.{jpg,jpeg,png}",
  imgWebp: "src/img/**/*.{webp,avif,.ico}",
  distCss: "public/css/",
  distJs: "public/js/",
  distImg: "public/img/",
  php: "**/*.php",
  fonts: "src/fonts/**/*.woff2",
  distFonts: "public/fonts/",
  jquery: "src/jquery/*.js",
  distJquery: "public/js/",
  icons: "src/img/icons/*.svg"
};

// -------------------------
// AUTO RELOADCOM BROWSER SYNC
// -------------------------
function serve(done) {
  browserSync.init({
    proxy: "http://localhost/",
    open: false,
    notify: false
  });
  done();
}

function reload(done) {
  browserSync.reload();
  done();
}

// -------------------------
// COMPILA SCSS → CSS MINIFICADO
// -------------------------
function buildSCSS() {
  return src("src/scss/main.scss")
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(cleanCSS())
    .pipe(concat("main.min.css"))
    .pipe(sourcemaps.write("."))
    .pipe(dest(paths.distCss));
}

// -------------------------
// BUNDLE & MINIFY JS
// -------------------------
async function buildJS() {
  await esbuild.build({
    entryPoints: ["src/js/main.js"],
    outfile: "public/js/main.min.js",
    minify: true,
    bundle: true,
    format: "iife",
    sourcemap: false
  });
  browserSync.reload();
}

// -------------------------
// COPIA O JQUERY
// -------------------------
function copyJquery() {
  return src(paths.jquery)
    .pipe(dest(paths.distJquery));
}

// -------------------------
// CONVERTE IMG → WEBP
// -------------------------
function convertImg() {
  return src(paths.img)
    .pipe(gulpIf(
      file => file.relative.includes('hero'), 
      
      webp({ quality: 100, lossless: true }), 
      
      webp({ quality: 85 }) 
    ))
    .pipe(dest(paths.distImg));
}

// -------------------------
// COMPILA OS SVG EM UM ÚNICO ARQUIVO DE SPRITES
// -------------------------
function svgIcons() {
  return src(paths.icons)
    .pipe(svgSprite({
      mode: {
        symbol: {
          sprite: '../icons.svg'
        }
      },
      shape: {
        id: {
          generator: (name) => name
        }
      }
    }))
    .pipe(dest(paths.distImg));
}

// -------------------------
// COPIA IMG QUE JÁ ESTÃO NOS FORMATOS ACEITOS
// -------------------------
function copyWebp() {
  return src(paths.imgWebp)
    .pipe(dest(paths.distImg));
}

// -------------------------
// COPIA FONTS NO FORMATO WOFF2
// -------------------------
function copyFonts() {
  return src(paths.fonts)
    .pipe(dest(paths.distFonts));
}


// -------------------------
// WATCH
// -------------------------
function watchFiles() {
  watch(paths.scss, buildSCSS);
  watch(paths.js, buildJS);
  watch(paths.img, convertImg);
  watch(paths.imgWebp, copyWebp);
  watch(paths.php, reload);
  watch(paths.fonts, copyFonts);
  watch(paths.jquery, copyJquery);
  watch(paths.icons, svgIcons);
}

// -------------------------
// TASKS PÚBLICAS
// -------------------------
exports.dev = parallel(buildSCSS, buildJS, convertImg, svgIcons, serve, watchFiles, copyFonts, copyJquery);
exports.build = parallel(buildSCSS, buildJS, convertImg, svgIcons, copyFonts, copyJquery);
exports.default = exports.dev;