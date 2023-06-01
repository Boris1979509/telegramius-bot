import { Tabs } from '@/components/Tabs'
import { truncateWithEllipses } from '@/utils/truncateWithEllipses'
import { setImage } from '@/utils/setImage'
import noImageUrl from '../../images/no-image.jpg'

class Search {
    constructor () {
        this.myInput = document.getElementById('searchInput')
        this.tab = document.getElementById('tab')
        this.categoriesContainer = document.getElementById('categories')
        this.productsContainer = document.getElementById('products')
        this.categoriesResultHtml = ''
        this.productsResultHtml = ''

        this.myInput.addEventListener('input', this.handleInput.bind(this))
    }
    getImage (image) {
        return image ? image : noImageUrl
    }
    handleInput (event) {
        const value = event.target.value
        if (!value) {
            this.tab.classList.remove('show')
            this.clear()
            return
        }
        // Global variables
        preloader.show()

        Promise.all([
            api.getSearchCategories({
                search: value
            }),
            api.getSearchProducts({
                search: value
            })
        ])
            .then(([respCategories, respProducts]) => {
                new Tabs()
                this.tab.classList.add('show')
                this.categoriesResultHtml = ''
                const categories = respCategories.data
                const products = respProducts.data
                // Кол-во категорий в ряду 1/2
                const numCategoriesInRow = respCategories.numCategoriesInRow
                // Кол-во продустов в ряду 1/2
                const numProductsInRow = respCategories.numProductsInRow

                categories.forEach(item => {
                    this.categoriesResultHtml += `
                                  <a href="${
                                      '/catalog/' + item.slug
                                  }" class="category ${
                        numCategoriesInRow === 1 ? 'item-one' : ''
                    }">
                                    <img src="${this.getImage(
                                        item.image
                                    )}" alt="" class="category-img" />
                                    ${
                                        item.is_visible_name
                                            ? `<span class="category__title">${truncateWithEllipses(
                                                  item.name,
                                                  25
                                              )}</span>`
                                            : ''
                                    }
                                  </a>
                                `
                })
                this.categoriesContainer.innerHTML = this.categoriesResultHtml

                if (products.length) {
                    this.productsResultHtml = ''
                    products.forEach(item => {
                        this.productsResultHtml += `
                                <div
                                    class="product home_slider ${
                                        numProductsInRow === 1 ? 'item-one' : ''
                                    }"
                                >
                                    <div class="product_images_wrap">
                                        <div class="slider_images_wrap">
                                            <div class="slider_list home_slider">
                                                <div class="slider__item">
<swiper-container class="swiper-${item.id}" loop="true" init="false">
                                                            
                                                `
                        setImage(item.images).forEach(img => {
                            this.productsResultHtml += `
                                                    <swiper-slide>
                                                    <a href="${
                                                        '/product/' + item.slug
                                                    }">
                                                    <img
                                                        class="slider__item-img"
                                                        src="${img.url}"
                                                        alt=""
                                                    />
                                                    </a>
                                                    </swiper-slide>`
                        })
                        this.productsResultHtml += `
                                                </swiper-container>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                    })
                    this.productsContainer.innerHTML = this.productsResultHtml

                    products.forEach(item => {
                        initializeSwiper('.swiper-' + item.id)
                    })
                }
                // Global variables
                preloader.hide()
            })
            .catch(error => {
                console.error(error)
                // Global variables
                preloader.hide()
            })
    }
    clear () {
        this.categoriesContainer.innerHTML = ''
        this.productsContainer.innerHTML = ''
    }
}
new Search()
