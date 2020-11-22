function nightMode() {
  const element = document.getElementsByTagName("body")
  if (element[0].classList.contains("light")) {
    element[0].classList.remove("light")
    element[0].classList.add("night")
  } else {
    element[0].classList.remove("night")
    element[0].classList.add("light")
  }
}
