export const toggleShow = elementId => {
    const element = document.getElementById(elementId)
    if (element) {
        element.classList.toggle('show')
    }
}
