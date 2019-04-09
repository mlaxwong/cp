import upload from './_upload'
import toasts from './_toasts'

// custom custom element list
const customElements = {
  'paw-upload': upload,
  'paw-toasts': toasts
}

// register custom element
Object.entries(customElements).forEach(entry => {
  const handler = entry[0]
  const customElement = entry[1]
  window.Vue.customElement(handler, customElement)
})
