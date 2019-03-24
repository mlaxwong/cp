module.exports = (paw) => {
  const elements = document.querySelectorAll('[confirm]')
  elements.forEach((element) => {
    element.onclick = function (event) {
      if (confirm(event.target.getAttribute('confirm'))) {
        if (event.target.hasAttribute(['data-method'])) {
          event.preventDefault()
          const data = event.target.dataset
          const method = data.method || 'post'
          const params = data.params || []
          const url = event.target.href
          paw.customRequest(method, url, params)
        }
      } else {
        event.preventDefault()
      }
    }
  })
}
