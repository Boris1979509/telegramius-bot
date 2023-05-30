export class Tabs {
    constructor () {
        this.tabNav = document.querySelector('.tab_list')
        this.tabContent = document.querySelector('.tab_content')
        this.tabs = this.tabNav.querySelectorAll('.tab_item')

        // Добавляем обработчик событий для клика по вкладке
        this.tabs.forEach(tab => {
            tab.addEventListener('click', event => {
                event.preventDefault()
                const tabId = tab.getAttribute('data-tab')
                this.activateTab(tabId)
            })
        })
    }

    activateTab (tabId) {
        // Удаление класса "active" у всех вкладок и контентов
        this.tabs.forEach(tab => {
            tab.classList.remove('active')
        })
        this.tabContent.querySelectorAll('.tab_pane').forEach(content => {
            content.classList.remove('active')
        })

        // Добавление класса "active" к выбранной вкладке и соответствующему контенту
        const tab = this.tabNav.querySelector(`label[data-tab="${tabId}"]`)
        const content = this.tabContent.querySelector(`#${tabId}`)
        if (tab && content) {
            tab.classList.add('active')
            content.classList.add('active')
        }
    }
}
