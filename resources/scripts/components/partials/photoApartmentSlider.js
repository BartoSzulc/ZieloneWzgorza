import Swiper from 'swiper';

import { Autoplay, EffectFade, Pagination, Navigation, } from 'swiper/modules';

Swiper.use([Pagination, Autoplay, EffectFade, Navigation ]);

export function initPhotoApartmentSlider() {

    document.querySelectorAll('.swiperPhotoApartment').forEach(el => {

        let photoApartmentSwiper = new Swiper(el, {
            simulateTouch: false,
            loop: true,
            slidesPerView: 1,
            speed: 750,
            keyboard: {
              enabled: true,
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
        });

        if (photoApartmentSwiper.slides.length > 1) {

        } 
    });
}
    