(function () {
  document.querySelector('[data-method]').onclick = (event) => {
    event.preventDefault()
    const data = event.target.dataset
    const method = data.method || 'post'
    const params = data.params || []
    const url = event.target.href
    customrequest(method, url, params)
  }

  const customrequest = (method, url, params) => {
    params = isJson(params) ? JSON.parse(params) : params
    var form = document.createElement('form')
    form.setAttribute('method', method)
    form.setAttribute('action', url)
    for (var key in params) {
      if (params.hasOwnProperty(key)) {
        var hiddenField = document.createElement('input')
        hiddenField.setAttribute('type', 'hidden')
        hiddenField.setAttribute('name', key)
        hiddenField.setAttribute('value', params[key])

        form.appendChild(hiddenField)
      }
    }
    document.body.appendChild(form)
    form.submit()
  }

  const isJson = (str) => {
    try {
      JSON.parse(str)
    } catch (e) {
      return false
    }
    return true
  }
}())
