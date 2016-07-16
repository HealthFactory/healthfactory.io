var gulp = require('gulp');
var iconfont = require('gulp-iconfont');
var iconfontCss = require('gulp-iconfont-css');

var fontName = 'iconfont';

gulp.task('iconfont', function() {
  gulp.src(['assets/SVG/*.svg'])
    .pipe(iconfontCss({
      fontName: fontName,
      path: 'assets/template-iconfont.css',
      targetPath: '../../css/iconfont.css',
      fontPath: '../fonts/iconfont/'
    }))
    .pipe(iconfont({
      formats: ['svg', 'ttf', 'eot', 'woff', 'woff2'],
      fontName: fontName
    }))
    .pipe(gulp.dest('fonts/iconfont'));
});
