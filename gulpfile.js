"use strict";
// Gulpfile Taskrunner | by SecondSite
// Read the README.md for a list of the functions available
// Load plugins
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const del = require("del");
const gulp = require("gulp");
const newer = require('gulp-newer');
const imagemin = require('gulp-imagemin');
const header = require("gulp-header");
const merge = require("merge-stream");
const plumber = require("gulp-plumber");
const rename = require("gulp-rename");
const sass = require("gulp-sass");
const uglify = require("gulp-uglify");
const concat = require('gulp-concat');
const deporder = require('gulp-deporder');
const terser = require('gulp-terser');
const stripdebug = require('gulp-strip-debug');
const sourcemaps = require('gulp-sourcemaps');

// Load package.json for banner
const pkg = require('./package.json');

// Set the banner content
const banner = ['/*!\n',
  ' * Twig Template - <%= pkg.title %> v<%= pkg.version %> ((https://github.com/SecondSite-web/<%= pkg.name %>)\n',
  ' * Copyright ' + (new Date()).getFullYear(), ' <%= pkg.author %>\n',
  ' * Licensed under <%= pkg.license %> (https://github.com/SecondSite-web/<%= pkg.name %>/blob/master/LICENSE)\n',
  ' */\n',
  '\n'
].join('');

// image processing
function images() {

  const out = './images/';

  return gulp.src('./src/img/**/*')
    .pipe(newer(out))
    .pipe(imagemin({ optimizationLevel: 5 }))
    .pipe(gulp.dest(out));

};
exports.images = images;


// Clean vendor
function clean() {
    return del([
        './vendor/',
        './webfonts/',
        './css/',
        './logs/',
        './components/',
        './js/',
        './twig/css/',
    ]);
}

// Bring third party dependencies from node_modules into vendor directory
function modules() {
  // Bootstrap JS
  var bootstrapJS = gulp.src('./node_modules/bootstrap/dist/js/*')
    .pipe(gulp.dest('./vendor/bootstrap/js'));
  // Bootstrap SCSS
  var bootstrapSCSS = gulp.src('./node_modules/bootstrap/scss/**/*')
    .pipe(gulp.dest('./vendor/bootstrap/scss'));
  // Bootswatch
  var bootswatch = gulp.src('./node_modules/bootswatch/dist/**/*')
    .pipe(gulp.dest('./vendor/bootswatch'));
  // Font Awesome
  var fontAwesome = gulp.src('./node_modules/@fortawesome/**/*')
    .pipe(gulp.dest('./vendor'));
  // Fonts
  var fontAwesomeFonts = gulp.src('./node_modules/@fortawesome/fontawesome-free/webfonts/*')
    .pipe(gulp.dest('./webfonts'));
    // Charts
  var animateCss = gulp.src('./node_modules/animate.css/*')
    .pipe(gulp.dest('./vendor/animate'));
  // Charts
  var chartJS = gulp.src('./node_modules/chart.js/dist/*.js')
    .pipe(gulp.dest('./vendor/chart.js'));
  // dataTables
  var dataTables = gulp.src([
      './node_modules/datatables.net/js/*.js',
      './node_modules/datatables.net-bs4/js/*.js',
      './node_modules/datatables.net-bs4/css/*.css'
    ])
    .pipe(gulp.dest('./vendor/datatables'));
  // jQuery Easing
  var jqueryEasing = gulp.src('./node_modules/jquery.easing/*.js')
    .pipe(gulp.dest('./vendor/jquery-easing'));
  // jQuery Validation
  var jqueryValidation = gulp.src('./node_modules/jquery-validation/dist/*')
    .pipe(gulp.dest('./vendor/jquery-validation'));
  // Composer
  var popper = gulp.src('./node_modules/@popperjs/core/dist/umd/**/*')
    .pipe(gulp.dest('./vendor/popper/'));
    // jQuery
  var jquery = gulp.src('./node_modules/jquery/dist/*')
    .pipe(gulp.dest('./vendor/jquery/'));

  return merge(bootstrapJS, bootstrapSCSS, bootswatch, fontAwesome, fontAwesomeFonts, chartJS, dataTables, jqueryValidation, jqueryEasing, popper, jquery);
}

// CSS task
function css() {
  return gulp
    .src("./src/scss/**/*.scss")
    .pipe(plumber())
    .pipe(sass({
      outputStyle: "expanded",
      includePaths: "./node_modules",
    }))
    .on("error", sass.logError)
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 2 versions'],
      cascade: false
    }))
    .pipe(header(banner, {
      pkg: pkg
    }))
    .pipe(gulp.dest("./css"))
    .pipe(rename({
      suffix: ".min"
    }))
    .pipe(cleanCSS())
    .pipe(gulp.dest("./css"))
}

function twigcss() {
  return gulp
    .src("./twig/src/scss/**/*.scss")
    .pipe(plumber())
    .pipe(sass({
      outputStyle: "expanded",
      includePaths: "./node_modules",
    }))
    .on("error", sass.logError)
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 2 versions'],
      cascade: false
    }))
    .pipe(header(banner, {
      pkg: pkg
    }))
    .pipe(gulp.dest("./twig/css"))
    .pipe(rename({
      suffix: ".min"
    }))
    .pipe(cleanCSS())
    .pipe(gulp.dest("./twig/css"))
}

// JS task
function js() {
  return gulp
    .src([
      './src/js/*.js',
      '!./src/js/*.min.js',
    ])
    .pipe(uglify())
    .pipe(header(banner, {
      pkg: pkg
    }))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./js'));
}

function twigjs() {
  return gulp
    .src([
      './twig/src/js/*.js',
      '!./twig/src/js/*.min.js',
    ])
    .pipe(uglify())
    .pipe(header(banner, {
      pkg: pkg
    }))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./twig/js/'));
}

// Concat admin js files
function adminjs() {
  return gulp.src(["./vendor/jquery/jquery.js","./vendor/bootstrap/js/bootstrap.bundle.js","vendor/jquery-easing/jquery.easing.js","./vendor/jquery-validation/jquery.validate.js","./twig/src/js/**/*", "!./twig/src/js/*.min.js"])
    // .pipe(sourcemaps ? sourcemaps.init() : noop())
    .pipe(deporder())
    .pipe(concat('main.js'))
    .pipe(stripdebug ? stripdebug() : noop())
    .pipe(terser())
    // .pipe(sourcemaps ? sourcemaps.write() : noop())
    .pipe(header(banner, {
      pkg: pkg
    }))
    .pipe(gulp.dest('./twig/js/'));
}

// Concat js files
function clientjs() {
  return gulp.src(["./vendor/jquery/jquery.js","./vendor/bootstrap/js/bootstrap.bundle.js","./vendor/jquery-validation/jquery.validate.js","./src/js/**/*", "!./src/js/**/*.min.js"])
    // .pipe(sourcemaps ? sourcemaps.init() : noop())
    .pipe(deporder())
    .pipe(concat('main.js'))
    .pipe(stripdebug ? stripdebug() : noop())
    .pipe(terser())
    // .pipe(sourcemaps ? sourcemaps.write() : noop())
    .pipe(header(banner, {
      pkg: pkg
    }))
    .pipe(gulp.dest('./js/'));
}

gulp.task('uglify', function () {
    return pipeline(
        gulp.src([
            "./src/js/bootstrap.bundle.js",
            "./src/js/skip-link-focus-fix.js",
            "./src/js/custom.js"
        ]),
        deporder(),
        babel({
            presets: ['@babel/env']
        }),
        concat('scripts.min.js'),
        stripdebug(),
        strip(),
        uglify(),

        gulp.dest('./js/')
    );
});

// Watch files
function watchFiles() {
  gulp.watch("./src/scss/**/*", css);
  gulp.watch("./twig/src/scss/**/*", twigcss);
  gulp.watch(["./src/js/**/*", "!./src/js/**/*.min.js"], js);
  gulp.watch(["./twig/src/js/**/*", "!./twig/src/js/**/*.min.js"], twigjs);
}

// Define complex tasks

const vendor = gulp.series(modules);
const build = gulp.series(css, js, twigcss, twigjs, adminjs, clientjs);
const watch = gulp.series(build, gulp.parallel(watchFiles));

// Export tasks
exports.css = css;
exports.js = js;
exports.twigcss = twigcss;
exports.twigjs = twigjs;
exports.clean = clean;
exports.vendor = vendor;
exports.build = build;
exports.adminjs = adminjs;
exports.clientjs = clientjs;
exports.watch = watch;
exports.default = build;
