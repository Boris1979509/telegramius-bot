export class Cart {
    addItem (id) {
        const qty = 1
        const totalInput = document.getElementById('item-total-qty-' + id)
        const currentBlock = this.findBlock(id)
        const nextBlock = currentBlock?.nextElementSibling

        if (totalInput && !+totalInput.value) {
            currentBlock.classList.add('hidden')
            nextBlock.classList.remove('hidden')
        }

        api.addToCart({ id, qty })
            .then(() => {
                if(totalInput) totalInput.value++
            })
            .catch(error => {
                console.error('Error when executing AJAX request:', error)
            })
    }

    removeItem (id) {
        const totalInput = document.getElementById('item-total-qty-' + id)

        api.removeFromCart({ id })
            .then(() => {
                if (+totalInput.value > 1) {
                    totalInput.value--
                }
            })
            .catch(error => {
                console.error('Error when executing AJAX request:', error)
            })

        if (+totalInput.value === 1) {
            totalInput.value = ''
            const currentBlock = this.findBlock(id)
            const nextBlock = currentBlock.nextElementSibling
            currentBlock.classList.remove('hidden')
            nextBlock.classList.add('hidden')
        }
    }

    findBlock (id) {
        return document.querySelector('[data-show="' + id + '"]')
    }
}
