gulp = require 'gulp'
webserver = require 'gulp-webserver'
plumber = require 'gulp-plumber'

# Use Sass/Compass
sass = require 'gulp-ruby-sass'
compass = require 'gulp-compass'
sourcemaps = require 'gulp-sourcemaps'
pleeease = require 'gulp-pleeease'

# Use CoffeeScript
coffee = require 'gulp-coffee'

# Use Notice
notify = require "gulp-notify"

# File Path
paths =
  style:
    src: './sass/{,*/}*.scss'
    sass: "./sass/"
    css: './css/'
  script:
    coffee: 'app/coffee/{,*/}*.coffee'
    js: 'app/script/'


# Webサーバー
gulp.task 'webserver', ->
  gulp.src './'
    .pipe webserver
      livereload: true
      port: 3000
      # directoryListing: true
    .pipe notify
      title: "Gulp"
      message: "Start WebServer http://localhost:3000/"
      wait: true
      sound: "Glass"


# Sass Compile
# (doesn't support globs yet, only single files or directories.)
# Use Bourbon

gulp.task 'sass', ->
  sass('./sass/style.scss', {
    style: 'expanded'
    sourcemap: true
    compass: true
  })
  .on('error', (err) ->
    console.log 'err'
    console.error('Error', err.message)
  )
  .pipe sourcemaps.write()
  .pipe gulp.dest(paths.style.dest)


# CoffeeScript Compile
gulp.task 'coffee', () ->
  gulp.src paths.script.coffee
    .pipe plumber()
    .pipe coffee()
    .pipe gulp.dest(paths.script.js)
    .pipe notify
      title: "Gulp"
      message: "Finish Coffee Compile"
      wait: true
      sound: "Glass"

# Watch task
gulp.task 'watch', ->
  gulp.watch paths.style.src, ['sass']
  gulp.watch paths.script.coffee, ['coffee']

gulp.task 'default', ['webserver', 'watch', 'sass', 'coffee']
