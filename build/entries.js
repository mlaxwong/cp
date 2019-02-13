module.exports = [
  {
    entry: [
      './src/assets/source/js/cp.js',
      './src/assets/source/scss/cp.scss'
    ],
    output: {
      path: './dist/',
      filename: {
        js: 'asset.cp.js',
        css: 'asset.cp.css'
      }
    }
  }
]