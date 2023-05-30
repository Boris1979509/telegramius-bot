export class Preloader {
    constructor (selector) {
        this.preloader = document.querySelector(selector)
    }

    show () {
        this.preloader.style.display = 'flex'
    }

    hide () {
        this.preloader.style.display = 'none'
    }
}
