(function (window) {
  const paw = require('./_core')

  const features = [
    require('./_data-method'),
    require('./_confirm')
  ]

  const init = (paw) => {
    features.forEach(feature => {
      feature(paw)
    })
  }

  // window.paw = paw
  init(paw)
}(typeof window !== 'undefined' ? window : {}))
