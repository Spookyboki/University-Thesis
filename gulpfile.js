'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var runSequence = require('run-sequence');
var iconfont = require('gulp-iconfont');
var async = require('async');
var consolidate = require('gulp-consolidate');
var sassLint = require('gulp-sass-lint');

gulp.task('sass', () => {
    return gulp.src('resources/sass/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('public/css'))
});

gulp.task('sass-lint', () => {
    return gulp.src('resources/sass/**/*.s+(a|c)ss')
        .pipe(sassLint())
        .pipe(sassLint.format())
        .pipe(sassLint.failOnError())
});

gulp.task('watch', ['sass'], () => {
    gulp.watch('resources/sass/**/*.scss', ['sass' , 'sass-lint' ]);
});

gulp.task('build', callback => {
    runSequence(['sass'],
        callback
        )
});

gulp.task('iconfont', done => {
    var iconStream = gulp.src(['public/img/svg/*.svg'])
      .pipe(iconfont({
        fontName: 'icons',
      }));
      async.parallel([
        function handleGlyphs(cb) {
            iconStream.on('glyphs', function(glyphs, options) {
                gulp.src('resources/conf/_iconfont-template.scss')
                  .pipe(consolidate('lodash', {
                    glyphs: glyphs,
                    fontName: 'icons',
                    fontPath: '../resources/fonts/',
                    className: 's'
                  }))
                  .pipe(gulp.dest('resources/sass/utilities/'))
                  .on('finish', cb);
              });
            },
            function handleFonts (cb) {
                iconStream
                    .pipe(gulp.dest('resources/fonts/'))
                    .on('finish', cb);
            }
          ], done);
});

gulp.task('default', ['watch']);