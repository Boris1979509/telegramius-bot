import '@/js/bootstrap'
import api from '@/js/api'
import { truncateWithEllipses } from '@/js/utils/truncateWithEllipses'
import { toggleShow } from '@/js/utils/toggle'
import { initializeSwiper } from '@/js/utils/initializeSwiper'
import { Preloader } from '@/js/components/Preloader'
import { Cart } from '@/js/components/Cart'
import { Favorites } from '@/js/components/Favorites'

// Добавляем функции в глобальный контекст
window.cart = new Cart()
window.favorites = new Favorites()
window.truncateWithEllipses = truncateWithEllipses
window.toggleShow = toggleShow
window.api = api
window.initializeSwiper = initializeSwiper
window.preloader = new Preloader('.loader_container')

// При загрузки страницы
document.addEventListener('DOMContentLoaded', () => window.preloader.show())
window.addEventListener('load', () => window.preloader.hide())
