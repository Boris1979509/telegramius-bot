class LocalStorageDB {
    constructor (dbPrefix) {
        this.dbPrefix = dbPrefix
    }

    save (key, value) {
        const data = JSON.stringify(value)
        localStorage.setItem(this.dbPrefix + key, data)
        return true
    }

    fetch (key) {
        let data = localStorage.getItem(this.dbPrefix + key)

        if (data === null) return false

        try {
            data = JSON.parse(data)
        } catch (e) {
            console.error(e)
        }

        return data
    }

    delete (key) {
        localStorage.removeItem(this.dbPrefix + key)
    }
}
export default LocalStorageDB
