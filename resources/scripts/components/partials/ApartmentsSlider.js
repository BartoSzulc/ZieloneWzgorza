import Swiper from 'swiper';

import { Autoplay, EffectFade, Pagination, Navigation, } from 'swiper/modules';

Swiper.use([Pagination, Autoplay, EffectFade, Navigation ]);

export function initApartmentsSlider() {

    document.querySelectorAll('.swiperApartments').forEach(el => {

        let ApartmentsSwiper = new Swiper(el, {
            simulateTouch: false,
            loop: true,
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 0,
            speed: 750,
            keyboard: {
              enabled: true,
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
            breakpoints: {
              768: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 24,
              },
              1024: {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 24,
                
              },
            }
        });

        if (ApartmentsSwiper.slides.length > 1) {

        } 
    });
}
    