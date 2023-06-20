// Устанавливаем активную точку в футер
const setActiveDot = () => {
    const activeDot = document.querySelector('.favorites.circle-red')
    const favorites = document.querySelectorAll('.favorites.like-set')
    if (favorites.length >= 1) {
        activeDot.classList.add('active')
    } else {
        activeDot.classList.remove('active')
    }
}
export const toggleLike = productId => {
    const likeButton = document.getElementById('like-' + productId)
    likeButton.classList.toggle('like-set')

    // Вызов метода для добавления или удаления из избранного
    api.toggleFavorite({
        productId
    })
        .then(response => {
            if (response.success) {
                console.log(response.message)
                setActiveDot()
            } else {
                console.error(
                    'Error when adding/removing an item from favorites'
                )
                // Вернуть состояние кнопки обратно, если произошла ошибка
                likeButton.classList.toggle('like-set')
            }
        })
        .catch(error => {
            console.error('Error when executing AJAX request:', error)
            // Вернуть состояние кнопки обратно, если произошла ошибка
            likeButton.classList.toggle('like-set')
        })
}
