import LocalStorageDB from '@/js/components/LocalStorageDB'
import { getSubdomain } from '@/js/utils/getSubdomain'

export class Favorites {
    constructor () {
        this.subdomain = getSubdomain() || 'test'
        this.db = new LocalStorageDB('favorites=')
        this.items = this.loadFavorites()
    }

    loadFavorites () {
        return this.db.fetch(this.subdomain) || []
    }

    saveFavorites () {
        this.db.save(this.subdomain, this.items)
    }

    isFavorite (id) {
        return this.items.includes(id)
    }

    addFavorite (id) {
        if (!this.isFavorite(id)) {
            this.items.push(id)
            this.saveFavorites()
        }
    }

    removeFavorite (id) {
        const index = this.items.indexOf(id)
        if (index !== -1) {
            this.items.splice(index, 1)
            this.saveFavorites()
        }
    }

    toggleFavorite (id) {
        if (this.isFavorite(id)) {
            this.removeFavorite(id)
        } else {
            this.addFavorite(id)
        }
    }
}
