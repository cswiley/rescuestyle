var $       = require('gulp-load-plugins')(),
    opn     = require('opn'),
    browser = require('browser-sync').create(),
    gulp    = require('gulp');

gulp.task('scripts', function () {
    return gulp.src([
        './bower_components/foundation-sites/dist/js/foundation.js'
    ])
    .pipe($.concat('scripts.js'))
    .pipe(gulp.dest('./public/assets/js'));
});

gulp.task('cachebust', function () {
    // updateBuildVersion()
});

gulp.task('styles', function () {

    return gulp.src([
        './resources/sass/app.scss'
    ])
    .pipe($.sourcemaps.init())
    .pipe($.sass({
        includePaths: [
            './bower_components/foundation-sites/scss'
        ]
    }).on('error', $.sass.logError))
    .pipe(gulp.dest('./public/assets/css'));
});

gulp.task('sync', ['fonts', 'styles', 'scripts', 'css'], function () {
    browser.init({
        proxy: 'rescue-style.lcl',
        port : '8888',
        open : false
    }, function () {
        opn(['http://', 'rescue-style.lcl', ':', '8888'].join(''), function () {
            // do nothing
        });
    });

    gulp.watch([
        './resources/js/**/*.js'
    ], ['scripts', 'cachebust']);
    gulp.watch('./resources/sass/*', ['styles']);
    // gulp.watch(config.PATHS.images + '/**/*', ['images']);
});

gulp.task('default', ['sync']);