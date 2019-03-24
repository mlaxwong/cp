const customRequest = (method, url, params) => {
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

module.exports = {
  customRequest,
  isJson
}
