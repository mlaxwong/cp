module.exports = [
  {
    entry: [
      './static/js/cp.js',
      './static/scss/cp.scss'
    ],
    output: {
      path: './static/dist/',
      filename: {
        js: 'cp.js',
        css: 'cp.scss'
      }
    }
  }
]