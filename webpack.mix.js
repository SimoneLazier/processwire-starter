let mix = require('laravel-mix')

mix.setResourceRoot('site')
mix.setPublicPath('site/templates/dist')
mix.disableSuccessNotifications()

mix
  .ts('site/templates/scripts/main.ts', 'scripts')
  .extract('scripts/vendor.js')
  .postCss('site/templates/styles/main.css', 'styles', [require('tailwindcss')])

if (mix.inProduction()) mix.version()
