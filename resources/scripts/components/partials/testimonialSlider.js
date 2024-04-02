import Swiper from 'swiper';

export function initTestimonialSlider() {
    document.querySelectorAll('.swiperTestimonials').forEach(el => {
        let testimonialsSwiper = new Swiper(el, {
            simulateTouch: false,
            loop: true,
            slidesPerView: 1,
            speed: 750,
            slideToClickedSlide: true,
            loopFillGroupWithBlank: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            keyboard: {
              enabled: true,
            },
        });

        if (testimonialsSwiper.slides.length > 1) {
            const prevBtn = document.querySelector('.testimonialsSwiper__nav--prev');
            const nextBtn = document.querySelector('.testimonialsSwiper__nav--next');
            
            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    testimonialsSwiper.slidePrev();
                }, false);
            }
        
            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    testimonialsSwiper.slideNext();
                }, false);
            }
        } else {
            document.querySelectorAll('.testimonialsSwiper__nav').forEach(nav => nav.classList.add('hidden'));
        }
    });
}
