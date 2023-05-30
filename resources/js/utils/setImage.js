import url from '@/images/no-image.jpg'

export const setImage = (images, first = false) => {
    if (!images.length) {
        images = [{ url }]
    }

    return first ? images[0] : images
}
