import Swiper from 'swiper';
import { Autoplay, EffectFade, Pagination, Navigation, } from 'swiper/modules';
Swiper.use([Pagination, Autoplay, EffectFade, Navigation ]);

export function initTestimonialSlider() {
    document.querySelectorAll('.swiperTestimonials').forEach(el => {
        let testimonialsSwiper = new Swiper(el, {
            simulateTouch: false,
            loop: true,
            slidesPerView: 1.82851,
            spaceBetween: calculateSlideSpace(),
            centeredSlides: true,
            centeredSlidesBounds: true,
            initialSlide: 2,
            speed: 750,
            slideToClickedSlide: true,
            loopFillGroupWithBlank: true,
            keyboard: {
              enabled: true,
            },
        });
        function calculateSlideSpace() {

            const spacePercentage = (96 / 1440) * 100;
            return `${spacePercentage}%`;
          }

        // if (testimonialsSwiper.slides.length > 1) {
        //     const prevBtn = document.querySelector('.testimonialsSwiper__nav--prev');
        //     const nextBtn = document.querySelector('.testimonialsSwiper__nav--next');
            
        //     if (prevBtn) {
        //         prevBtn.addEventListener('click', () => {
        //             testimonialsSwiper.slidePrev();
        //         }, false);
        //     }
        
        //     if (nextBtn) {
        //         nextBtn.addEventListener('click', () => {
        //             testimonialsSwiper.slideNext();
        //         }, false);
        //     }
        // } else {
        //     document.querySelectorAll('.testimonialsSwiper__nav').forEach(nav => nav.classList.add('hidden'));
        // }
    });
}
