import Vue from 'vue'
import vueCustomElement from 'vue-custom-element'

import upload from './_upload'

Vue.use(vueCustomElement)

// custom custom element list
const customElements = {
  'paw-upload': upload
}

// register custom element
Object.entries(customElements).forEach(entry => {
  const handler = entry[0]
  const customElement = entry[1]
  Vue.customElement(handler, customElement)
})
