var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass'),
    cleanCss = require('gulp-clean-css');

gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });
  gulp.watch('**/*.scss', { interval: 500 }).on('change', function () {
    gulp.start('dev-sass');
    browserSync.reload();
  });
});

//get scss files ready for deployment
gulp.task('prod-sass', function() {
    gulp.src('assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCss())
        .pipe(gulp.dest('dist/css/'));
});

//get scss files ready for development server
gulp.task('dev-sass', function() {
    gulp.src('assets/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCss())
        .pipe(gulp.dest('assets/css/'));
});


//move all files into dist folder ready to be deployed onto the FTP server
gulp.task('dist', function() {
    gulp.src(['assets/**/*']).pipe(gulp.dest('dist/assets'));
    gulp.src(['kirby/**/*']).pipe(gulp.dest('dist/kirby'));
    gulp.src(['content/**/*']).pipe(gulp.dest('dist/content'));
    gulp.src(['panel/**/*']).pipe(gulp.dest('dist/panel'));
    gulp.src(['site/**/*']).pipe(gulp.dest('dist/site'));
    gulp.src(['thumbs/**/*']).pipe(gulp.dest('dist/thumbs'));
    gulp.src(['./.htaccess','./index.php','readme.md']).pipe(gulp.dest('dist/'));
});

// run development and launch local host
gulp.task('default', ['connect-sync','dev-sass']);

// deployment script puts everything into dist folder
gulp.task('deploy', ['prod-sass', 'dist']);
