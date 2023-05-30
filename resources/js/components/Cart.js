import LocalStorageDB from '@/js/components/LocalStorageDB'
import { getSubdomain } from '@/js/utils/getSubdomain'

export class Cart {
    constructor () {
        this.subdomain = getSubdomain() || 'test'
        this.db = new LocalStorageDB('cart=')
        this.items = this.loadItemsFromLocalStorage()
    }

    addItem (item) {
        const { id, qty } = item
        const existingItem = this.items.find(item => item.id === id)

        if (existingItem) {
            existingItem.qty += qty
        } else {
            this.items.push({ id, qty })
        }
        this.saveItemsToLocalStorage()
    }

    removeItem (id) {
        const itemIndex = this.items.findIndex(item => item.id === id)

        if (itemIndex !== -1) {
            const currentItem = this.items[itemIndex]

            if (currentItem.qty > 1) {
                currentItem.qty--
            } else {
                this.items.splice(itemIndex, 1)
            }
        }
        this.saveItemsToLocalStorage()
    }

    saveItemsToLocalStorage () {
        this.db.save(this.subdomain, this.items)
    }

    loadItemsFromLocalStorage () {
        return this.db.fetch(this.subdomain) || []
    }
    /**
     * Получаем общее кол-во товаров
     */
    getTotalQuantity () {
        return this.items.reduce((totalQty, item) => totalQty + item.qty, 0)
    }
    /**
     * Получаем общее кол-во у определённого товара
     */
    getItemTotalQty (id) {
        const item = this.items.find(item => item.id === id)
        return item ? item.qty : 0
    }
}
