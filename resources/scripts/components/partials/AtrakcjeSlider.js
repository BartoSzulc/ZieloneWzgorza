import Swiper from 'swiper';
import { Autoplay, EffectFade, Pagination, Navigation, } from 'swiper/modules';
Swiper.use([Pagination, Autoplay, EffectFade, Navigation ]);


export function initAtrakcjeSlider() {
    document.querySelectorAll('.swiperAtrakcje').forEach(el => {

        let AtrakcjeSwiper = new Swiper(el, {
            simulateTouch: false,
            loop: true,
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 24,
            speed: 750,
            keyboard: {
              enabled: true,
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
        });

        if (AtrakcjeSwiper.slides.length > 1) {

        } 
    });
}