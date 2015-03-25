/**
* Created with verano.
* User: Danjavia
* Date: 2015-03-18
* Time: 02:06 AM
* To change this template use Tools | Templates.
*/
var gulp = require('gulp');
var less = require('gulp-less'),
    minifyCSS = require('gulp-minify-css'),
    path = require('path');

// Compiles LESS > CSS 
gulp.task('build-less', function(){
    return gulp.src( './public/less/main.less' )
        .pipe( less() )
        .pipe( minifyCSS() )
        .pipe( gulp.dest( './public/css/' ) );
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['build-less']);