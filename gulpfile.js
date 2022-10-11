const {src, dest, watch, parallel, series} = require("gulp"),
browsersync = require("browser-sync"),
del = require('del'),
phpConnect = require('gulp-connect-php'),
plumber = require("gulp-plumber"),
sass = require('gulp-sass')(require('sass')),
postcss = require("gulp-postcss"),
autoprefixer = require("autoprefixer"),
sourcemaps = require("gulp-sourcemaps"),
notify = require('gulp-notify'),
htmlmin = require('gulp-htmlmin'),
webp = require('gulp-webp'),
minify = require('gulp-minify'),
minifyInline = require('gulp-minify-inline'),
cssmin = require('gulp-cssmin'),
googleWebFonts = require('gulp-google-webfonts'),
readlineSync = require('readline-sync'),
chalk = require('chalk'),
rename = require('gulp-rename'),
favicons = require('gulp-favicons')

projectPath = './frontend'
paths = {
    base: {
        dir: projectPath,
        build: './build',
        src: projectPath + '/src',
        php: projectPath + '/**/*.php'
    },

    styles: {
        scss: projectPath + '/src/css/scss/**/*.scss',
        dest: projectPath + '/src/css',
        bootstrap: projectPath + '/src/css/bootstrap/**/*.scss'
    },

    scripts: {
        src: projectPath + '/src/js/*.js',
        dest: projectPath + '/src/js/',
        bootstrap: projectPath + '/src/js/bootstrap'
    },

    images: {
        src: projectPath + '/src/images'
    }
}

options = {
    fontsDir: './webfonts',
    cssDir: 'css',
    cssFilename: '_webfont.scss',
    relativePaths: true
}

function connectSync() {
    phpConnect.server({
        port: 3000,
        base: projectPath,
        keepalive: true,
        stdio: 'ignore'
    }, function () {
        browsersync({
            proxy: '127.0.0.1:3000',
            keepAlive: true,
            ghostMode: true,
            notify: false,
            open: true,
            reloadOnRestart: false,
        })
    })
    console.log(chalk.green('Gulp is running!'))
}

function browserSyncReload(done) {
    browsersync.reload()
    done()
}

function install(done) {
    console.log(chalk.blue('Loading Modules...'))

    if (readlineSync.keyInYN('Do you want to install Bootstrap?')) {
        copyBootstrap()
        copyBootstrapCSS()
        copyBootstrapJs()
        console.log(chalk.green('Bootstrap installed!'))
    }

    if (readlineSync.keyInYN('Do you want to install Fontawesome?')) {
        copyFontAwesome()
        copyFontAwesomeCSS()
        console.log(chalk.green('Fontawesome installed!'))
    }

    if (readlineSync.keyInYN('Do you want to install Webfont?')) {
        webfont()
        console.log(chalk.green('Webfont installed!'))
    }

    console.log(chalk.green('Installation completed!'))
    console.log(chalk.blue('Run "gulp" to start production...'))
    done()
}

function copyBootstrap() {
    return src(['./node_modules/bootstrap/scss/**/*', '!./node_modules/bootstrap/scss/bootstrap-grid.scss', '!./node_modules/bootstrap/scss/bootstrap-reboot.scss', '!./node_modules/bootstrap/scss/bootstrap-utilities.scss'])
        .pipe(dest(paths.styles.dest + '/bootstrap'))
}

function copyBootstrapCSS() {
    return src(['./node_modules/bootstrap/scss/bootstrap.scss'])
        .pipe(sass.sync({outputStyle: 'compressed'}))
        .pipe(dest(paths.styles.dest))
}

function copyBootstrapJs() {
    return src(['./node_modules/bootstrap/dist/js/bootstrap.js'])
        .pipe(dest(paths.scripts.dest))
}

function copyFontAwesome() {
    return src(['./node_modules/@fortawesome/fontawesome-pro/webfonts/*'])
        .pipe(dest(paths.base.src + '/webfonts'))
}

function copyFontAwesomeCSS() {
    return src(['./node_modules/@fortawesome/fontawesome-pro/css/all.css'])
        .pipe(rename('fontawesome.css'))
        .pipe(dest(paths.styles.dest))
}

function bootstrapCSS() {
    return src(paths.styles.bootstrap)
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass.sync({outputStyle: 'compressed'}))
        .on('error', sass.logError)
        .pipe(postcss([autoprefixer()]))
        .pipe(sourcemaps.write('../css/'))
        .pipe(dest(paths.styles.dest))
        .pipe(browsersync.stream())
        .pipe(notify({
            message: 'Bootstrap compiled',
            onLast: true
        }))
}

function css() {
    return src(paths.styles.scss)
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass.sync({outputStyle: 'compressed'}))
        .on('error', sass.logError)
        .pipe(postcss([autoprefixer()]))
        .pipe(sourcemaps.write('../css/'))
        .pipe(dest(paths.styles.dest))
        .pipe(browsersync.stream())
        .pipe(notify({
            message: 'SASS compiled',
            onLast: true
        }))
}

function scripts() {
    return src(['./frontend/src/js/**/*.js', '!./frontend/src/js/form/*'], {sourcemaps: true})
        .pipe(plumber())
        .pipe(browsersync.stream())
        .pipe(notify({
            message: 'JS done',
            onLast: true
        }))
}

function cleanWebp() {
    return del(projectPath + '/src/images/**/**/*.webp')
}

function webpImage() {
    console.log(chalk.blue('Webp created!'))
    return src(projectPath + '/src/images/**/**/*')
        .pipe(webp({
            quality: 80,
            lossless: false
        }))
        .pipe(dest(projectPath + '/src/images'))
}

function minifyCSS() {
    console.log(chalk.blue('CSS minified!'))
    return src(paths.styles.dest + '/*.css')
        .pipe(cssmin())
        .pipe(dest(paths.base.build + '/src/css'))
}

function minifyJS() {
    console.log(chalk.blue('JS minified!'))
    return src(paths.scripts.dest + '/*.js')
        .pipe(minify())
        .pipe(dest(paths.base.build + '/src/js'))
}

function minifyHTML() {
    console.log(chalk.blue('HTML minified!'))
    return src(['./frontend/**/*.php', '!./frontend/email/**/*'])
        .pipe(htmlmin({
            collapseWhitespace: true,
            ignoreCustomFragments: [/<%[\s\S]*?%>/, /<\?[\s\S]*?\?>/],
            removeComments: true
        }))
        .pipe(minifyInline())
        .pipe(dest(paths.base.build))
}

function clean() {
    console.log(chalk.blue('Build deleted!'))
    return del(paths.base.build)
}

function copy() {
    console.log(chalk.blue('Copied Framework!'))
    return src([projectPath + '/**/**/*', '!./frontend/src/js/**'])
        .pipe(dest(paths.base.build))
}

function favicon() {
    return src(paths.base.src + '/favicon/favicon.png')
        .pipe(
            favicons({
                appName: 'Green Property Technologies',
                appShortName: 'GPT',
                appDescription: 'Mit Green Property Technologies effizient und nachhaltig optimieren ',
                developerName: 'Duplexmedia',
                developerURL: 'https://duplexmedia.com',
                background: '#ffffff',
                path:'/src/favicon/',
                url: 'https://duplexmedia.com',
                display: 'standalone',
                orientation: 'portrait',
                scope: '/',
                start_url: 'https://duplexmedia.com/',
                version: 1.0,
                logging: false,
                html: 'favicon.php',
                pipeHTML: true,
                replace: true,
            })
        )
        .pipe(dest(projectPath + '/src/favicon/'))
}

function deleteFontsCSS() {
    return del(paths.styles.dest + '/scss/_webfont.scss')
}

function webfont() {
    return src(paths.base.src + '/webfonts/fonts.list')
        .pipe(googleWebFonts(options))
        .pipe(dest(paths.base.src))
}

function copyWebfontSCSS() {
    return src(paths.styles.dest + '/_webfont.scss')
        .pipe(dest(paths.styles.dest + '/scss'))
}

function deleteWebfontSCSS() {
    return del(paths.styles.dest + '/_webfont.scss')
}

function watchFiles() {
    watch(paths.base.php, browserSyncReload)
    watch(paths.styles.scss, css)
    watch(paths.styles.bootstrap, bootstrapCSS)
    watch(paths.scripts.src, scripts)
}

exports.default = parallel ([
    connectSync,
    watchFiles
])

exports.install = install


exports.clean = clean


exports.copy = copy


exports.favicon = favicon

exports.webp = series ([
    cleanWebp,
    webpImage
])

exports.removewebp = cleanWebp


exports.build = series ([
    clean,
    copy,
    minifyCSS,
    minifyJS,
    minifyHTML
])

exports.webfont = series ([
    deleteFontsCSS,
    webfont,
    copyWebfontSCSS,
    deleteWebfontSCSS
])

