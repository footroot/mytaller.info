## jshint-visual-studio

JSHint Visual Studio reporter

### Install

Install with npm: `npm install --save-dev jshint-visual-studio`

### Usage

Use it with:

#### JSHint CLI

```
jshint --reporter node_modules/jshint-visual-studio/visual-studio.js file.js
```

#### gulp-jshint

```
gulp.task('default', function () {
	gulp.src(["file.js"])
		.pipe(jshint(".jshintrc"))
		.pipe(jshint.reporter("jshint-visual-studio"));
});
```

### License

Thanks to [jshint-teamcity](https://www.npmjs.com/package/jshint-teamcity).

MIT © Patrick Lafrance
