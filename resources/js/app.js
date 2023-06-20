import '@/bootstrap'
import api from '@/api'
import { truncateWithEllipses } from '@/utils/truncateWithEllipses'
import { toggleShow } from '@/utils/toggle'
import { initializeSwiper } from '@/utils/initializeSwiper'
import { Preloader } from '@/components/Preloader'
import { Cart } from '@/components/Cart'
import { toggleLike } from '@/utils/toggleLike'

// Добавляем функции в глобальный контекст
window.cart = new Cart()
window.truncateWithEllipses = truncateWithEllipses
window.toggleShow = toggleShow
window.toggleLike = toggleLike
window.api = api
window.initializeSwiper = initializeSwiper
window.preloader = new Preloader('.loader_container')

// При загрузки страницы
document.addEventListener('DOMContentLoaded', () => window.preloader.show())
window.addEventListener('load', () => window.preloader.hide())
