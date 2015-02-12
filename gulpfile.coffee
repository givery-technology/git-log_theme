gulp = require 'gulp'
webserver = require 'gulp-webserver'
plumber = require 'gulp-plumber'

# Use Sass/Compass
sass = require 'gulp-ruby-sass'
sourcemaps = require 'gulp-sourcemaps'
pleeease = require 'gulp-pleeease'

# Use CoffeeScript
coffee = require 'gulp-coffee'

# File Path
paths =
  style:
    src: './sass/{,*/}*.scss'
    css: './'
  script:
    coffee: './coffee/{,*/}*.coffee'
    js: './script/'


# Webサーバー
gulp.task 'webserver', ->
  gulp.src './'
    .pipe webserver
      livereload: true
      port: 3000
      # directoryListing: true


# Sass Compile
# (doesn't support globs yet, only single files or directories.)
# Use Bourbon

gulp.task 'sass', ->
  sass('./sass/style.scss', {
    style: 'expanded'
    sourcemap: true
    require: ['bourbon', 'neat']
  })
  .on('error', (err) ->
    console.error('Error', err.message)
  )
  .pipe sourcemaps.write()
  .pipe gulp.dest(paths.style.css)


# CoffeeScript Compile
gulp.task 'coffee', () ->
  gulp.src paths.script.coffee
    .pipe plumber()
    .pipe coffee()
    .pipe gulp.dest(paths.script.js)

# Watch task
gulp.task 'watch', ->
  gulp.watch paths.style.src, ['sass']
  gulp.watch paths.script.coffee, ['coffee']

gulp.task 'default', ['webserver', 'watch', 'sass', 'coffee']
