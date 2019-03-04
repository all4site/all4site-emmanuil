var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	notify = require('gulp-notify'),
	pug = require('gulp-pug'),
	pugphp = require('gulp-jade-php'),
	filter = require('pug-php-filter'),
	rename = require('gulp-rename'),
	browserSync = require('browser-sync'),
	wait = require('gulp-wait');

// WORK
gulp.task('sass', function () {
	return gulp.src('sass/**/*.sass')
		.pipe(wait(500))
		.pipe(sass.sync())
		.on('error', notify.onError({
			message: "<%= error.message %>",
			title: "Sass Error!"
		}))
		.pipe(autoprefixer(['last 2 versions', '> 1%', 'ie 8'], {
			cascade: true
		}))
		.pipe(gulp.dest('css/'))
});

// gulp.task('pug', function () {
// 	gulp.src(['pug/*.pug', '!pug/_*.pug'])
// 		.pipe(pugphp({
// 			pretty: true,
// 			filters: {
// 				php: filter
// 			}
// 					}))
// 		.on('error', notify.onError({
// 			message: "<%= error.message %>",
// 			title: "Jade Error!"
// 		}))
// 		.pipe(rename(function (path) {
// 			path.extname = ".php"
// 		}))
// 		.pipe(gulp.dest('.'))
// });

gulp.task('browser-sync', function () {
	browserSync({
		proxy: 'emmanuil.local',
		notify: false
	});
});
gulp.task('default', ['sass', 'browser-sync'], function () {
	gulp.watch('sass/*.sass', ['sass']);
	// gulp.watch('pug/*.pug', ['pug']);
	gulp.watch('css/*.css', browserSync.reload);
	gulp.watch('**/*.php', browserSync.reload);
	gulp.watch('js/*.js', browserSync.reload);

});

// END WORK