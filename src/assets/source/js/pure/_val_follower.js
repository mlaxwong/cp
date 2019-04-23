module.exports = (paw) => {
  const elements = document.querySelectorAll('[data-val-follow]')
  elements.forEach((element) => {
    let initValue = {}
    element.onkeyup = (event) => {
      event.preventDefault()
      const data = event.target.dataset
      const followId = data.valFollow
      const followTemplate = data.valFollowTemplate || '{val}'
      const followers = document.querySelectorAll('[data-val-follower=' + followId + ']')
      const val = element.value

      followers.forEach((followerElement, index) => {
        if (!initValue[index]) initValue[index] = followerElement.innerHTML
        followerElement.innerHTML = val ? followTemplate.strtr({ '{val}': val }) : initValue[index]
      })
    }
  })
}
