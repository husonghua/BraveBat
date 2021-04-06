const mix = require('laravel-mix')

mix
  .js('resources/js/app.js', 'public/js')
  .vue()
  .postCss('resources/css/app.css', 'public/css', [require('tailwindcss')])
  .version()
  .sourceMaps()
  .browserSync({ proxy: 'http://bravebat.test' })
  .disableNotifications()
