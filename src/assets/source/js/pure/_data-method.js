module.exports = (paw) => {
  const elements = document.querySelectorAll('[data-method]')
  elements.forEach((element) => {
    element.onclick = (event) => {
      event.preventDefault()
      const data = event.target.dataset
      const method = data.method || 'post'
      const params = data.params || []
      const url = event.target.href
      paw.customRequest(method, url, params)
    }
  })
}
