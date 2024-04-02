import Swiper from 'swiper';
import gsap from "gsap";

export function initCaseSlider() {
    document.querySelectorAll('.swiperCaseStudy').forEach(el => {
        let caseSwiper = new Swiper(el, {
            simulateTouch: false,
            loop: true,
            slidesPerView: 1,
            speed: 1500,
            // autoplay: {
            //     delay: 4000,
            //     pauseOnMouseEnter: true,
            //   },
            slideToClickedSlide: true,
            loopFillGroupWithBlank: true,
            
            keyboard: {
              enabled: true,
            },
            on: {
                init: function () {
                    calculateAndSetHeightForActiveSlide(this);
                    //active
                    const initialIcons = this.slides[this.activeIndex].querySelectorAll('.icon');
                    initialIcons.forEach((icon, index) => {
                      gsap.to(icon, {
                        opacity: 1,
                        scale: 1,
                        duration: 0.7,
                        delay: index * 0.3, // Each icon starts animating 0.2s after the previous one
                      });
                    });
                    gsap.fromTo(
                      el.querySelector('.swiper-slide-active .title-inside'),
                      { opacity: 0 },
                      { opacity: 1, duration: 0.7, delay: 0 } // Adjusted delay to 0.2 seconds
                    );
                    //next
                    const icons = this.el.querySelectorAll('.swiper-slide-next .icon');
                    icons.forEach((icon) => {
                      gsap.set(icon, {
                        opacity: 0,
                        scale: 0,
                        
                      });
                    });
                    gsap.set(
                      el.querySelector('.swiper-slide-next .title-inside'),
                      { opacity: 0 } // Set initial opacity to 0 and y position to -100
                    );

                },
                slideChangeTransitionStart: function () {
                    const icons = this.slides[this.previousIndex].querySelectorAll('.icon');
                    console.log('prev');
                    //const totalIcons = icons.length; // Get the total number of icons
                    //delay: (totalIcons - 1 - index) * 0.3, // Calculate delay based on reverse index
                    icons.forEach((icon, index) => {
                      gsap.fromTo(icon, {
                        opacity: 1,
                        scale: 1,
                      }, {
                        opacity: 0,
                        scale: 0,
                        duration: 0.7,
                        delay: index * 0.2, // Each icon starts animating 0.2s after the previous one
                      });
                    });

                    gsap.fromTo(
                      this.slides[this.previousIndex].querySelector('.title-inside'),
                      { opacity: 1 },
                      { opacity: 0 , duration: 0.7 } // Adjusted duration to 0.5 seconds
                    );
                },
                slideChange: function () {
                    calculateAndSetHeightForActiveSlide(this);

                    const icons = this.slides[this.activeIndex].querySelectorAll('.icon');
                    
                    icons.forEach((icon, index) => {
                      gsap.fromTo(icon, {
                        opacity: 0,
                        scale: 0,
                        delay: 1,
                      }, {
                        opacity: 1,
                        scale: 1,
                        duration: 0.7,
                        delay: index * 0.2, // Each icon starts animating 0.2s after the previous one
                      });

                    });
                    gsap.fromTo(
                      this.slides[this.activeIndex].querySelector('.title-inside'),
                      { opacity: 0 },
                      { opacity: 1, duration: 0.7, delay: 1 } // Adjusted duration to 0.5 seconds
                    );
                }
              }
        });
        if (caseSwiper.slides.length > 1) {
            const prevBtns = document.querySelectorAll('.caseSwiper__nav--prev');
            const nextBtns = document.querySelectorAll('.caseSwiper__nav--next');
        
            prevBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    caseSwiper.slidePrev();
                    //console.log('prev');
                }, false);
            });
        
            nextBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    caseSwiper.slideNext();
                    //console.log('next');
                }, false);
            });
        } else {
            document.querySelectorAll('.caseSwiper__nav').forEach(nav => nav.classList.add('hidden'));
        }
    });
    
    function calculateAndSetHeightForActiveSlide(swiperInstance) {
      if (window.innerWidth > 1024) {
      const activeSlide = swiperInstance.slides[swiperInstance.activeIndex];
      const calculateHeightElements = activeSlide.querySelectorAll('.calculateHeight');

      calculateHeightElements.forEach(calculateHeightElement => {
          let maxHeight = 0;
          const marginTop = 44;
          const marginBottom = 34;
          const iconHeight = 40;

          // Calculate the maxHeight based on the .text elements within the .calculateHeight container
          const textElements = calculateHeightElement.querySelectorAll('.icon .text');
          textElements.forEach(el => {
              const height = el.offsetHeight;
              if (height > maxHeight) {
                  maxHeight = height;
              }
          });

          // Calculate the new height for the .calculateHeight element
          let calculateHeight = (maxHeight * 2) + marginTop + marginBottom + iconHeight;

          // Set the height for the .calculateHeight element
          calculateHeightElement.style.height = calculateHeight + 'px';
        }); 
      }
    }
}
