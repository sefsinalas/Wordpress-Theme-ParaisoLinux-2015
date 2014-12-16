
var gulp = require('gulp'),
	compass = require('gulp-compass'),
	minifyCSS = require('gulp-minify-css');

gulp.task('compass', function() {
  	gulp.src('scss/*.scss')
    	.pipe(compass({
      		css: 'css',
      		sass: 'scss',
      		image: 'images'
    	}))
        .on('error', function(error) {
            // Would like to catch the error here
            console.log(error);
            // this.emit('end');
        })
    	.pipe(minifyCSS())
    	.pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
    gulp.watch('scss/*.scss', ['compass']);
});


gulp.task('default', ['watch'], function() {

});