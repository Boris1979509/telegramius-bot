import { register } from 'swiper/element/bundle'
// Регистрация Swiper-элементов
register()

export function initializeSwiper (selector) {
    const swiperEl = document.querySelector(selector)
    if (swiperEl) {
        const params = {
            injectStyles: [
                `
          .swiper-pagination::before {
            content: '';
            position: absolute;
            top: -30px;
            left: 0;
            right: 0;
            height: 20px;
            box-shadow: 0 20px 20px 0px rgb(0 0 0 / 20%);
            z-index: -1;
          }
          .swiper-pagination-horizontal {
            position: absolute;
            top: 7px !important;
            bottom: 100% !important;
            width: 100%;
            display: flex;
            justify-content: space-between;
            gap: 4px;
          }
          .swiper-pagination-bullet {
            border-radius: 5px;
            background: #737B84;
            height: 3px;
            width: 100%;
          }
          .swiper-pagination-bullet-active {
            background-color: #fff;
          }
        `
            ],
            pagination: {
                clickable: true,
                renderBullet: function (_, className) {
                    return '<span class="' + className + '"></span>'
                }
            }
        }

        Object.assign(swiperEl, params)
        swiperEl.initialize()
    }
}
