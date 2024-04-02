//import LazyLoad from "vanilla-lazyload";
import { domReady } from '@roots/sage/client';
import Menu from "./components/Menu";
import CardsScroll from "./components/CardsScroll";
import Carousels from "./components/Carousels";
import MarqueeText from "./components/MarqueeText";
import MarqueeImage from "./components/MarqueeImage";
import HeadingsScroll from "./components/HeadingsScroll";
import GLightbox from 'glightbox';
import AOS from 'aos';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from '@studio-freight/lenis'
import $ from 'jquery';
import { initModalSuccess } from './components/partials/modalSuccess';
/**
 * app.main
 */
gsap.registerPlugin(ScrollTrigger);
const main = async (err) => {
  

  const lenis = new Lenis()

  lenis.on('scroll', (e) => {
   // console.log(e)
  })
  
  lenis.on('scroll', ScrollTrigger.update)
  
  gsap.ticker.add((time)=>{
    lenis.raf(time * 1000)
  })
  
  gsap.ticker.lagSmoothing(0)




const body = document.querySelector('body');

if (body.classList.contains('home')) {
  gsap.fromTo(".image-overlay-layer", 
  { opacity: 1 }, // start state
  { // end state
    opacity: 0,
    scrollTrigger: {
      trigger: ".section_header",
      start: "top top",
      end: "bottom bottom",
      scrub: true,
      markers: false,
    }
  }
);
if (window.innerWidth > 1024) {
    gsap.fromTo(".hero_text",
    { 
      fontSize: "clamp(4rem, 4vw + 1.5rem, 4.5rem)", // h2 to h3 fontSize
      lineHeight: "clamp(4.813rem, 5vw + 1.25rem, 5.375rem);", // h2 to h3 lineHeight
    },
    { // end state
      fontSize: "clamp(4.5rem, 5.5vw + 2rem, 6.625rem)", // h1 to h2 fontSize
      lineHeight: "clamp(5.375rem, 5.5vw + 2rem, 7.938rem)", // h1 to h2 lineHeight
      scrollTrigger: {
        trigger: ".section_header",
        start: "top top",
        end: "bottom bottom",
        scrub: true,
        markers: false,
      }
    }
  );
} else {
  gsap.fromTo(".hero_text",
    {
      fontSize: "clamp(2.75rem, 4vw + 1rem, 4rem)", // h2 to h3 fontSize
      lineHeight: "clamp(3.563rem, 5vw + 1rem, 4.813rem)", // h2 to h3 lineHeight
    },
    { // end state
      fontSize: "clamp(4rem, 4vw + 1.5rem, 4.5rem)", // h1 to h2 fontSize
      lineHeight: "clamp(4.813rem, 5vw + 1.25rem, 5.375rem)", // h1 to h2 lineHeight
      scrollTrigger: {
        trigger: ".section_header",
        start: "top top",
        end: "bottom bottom",
        scrub: true,
        markers: false,
      }
    }
  );
}
if (window.innerWidth > 1440) {
  gsap.fromTo(".header_images-layout",
  { scale: 3.2 },
  { // end state
    scale: 1,
    scrollTrigger: {
      trigger: ".section_header",
      start: "top top",
      end: "bottom bottom",
      scrub: true,
      markers : false,
    }
  }
);
} else {
  gsap.fromTo(".header_images-layout",
  { scale: 3.5 },
  { // end state
    scale: 1,
    scrollTrigger: {
      trigger: ".section_header",
      start: "top top",
      end: "bottom bottom",
      scrub: true,
      markers : false,
    }
  }
);
}

function setupScrollAnimation() {
  if (window.innerWidth > 1024) {
    const cardsContainer = document.querySelector('.cards-container');
    let containerWidth = cardsContainer.offsetWidth;
    let windowScrollWidth = document.documentElement.scrollWidth;
    let overflowWidth = containerWidth - windowScrollWidth;

    // console.log("container", containerWidth);
    // console.log("window scroll width", windowScrollWidth);
    // console.log("overflow", overflowWidth);
    // Ensure there's actual overflow to animate
    
    if (overflowWidth > 0) {
      // Create or update the ScrollTrigger instance
      ScrollTrigger.create({
        trigger: cardsContainer,
        start: 'top +=100',
        end: 'bottom bottom',
        onUpdate: (self) => {
          const progress = self.progress; // Value from 0 to 1 based on scroll position
          const xPosition = -progress * overflowWidth; // Calculate the x translation
          gsap.to(cardsContainer, {x: xPosition, ease: 'none'});
        },
        onKill: () => gsap.set(cardsContainer, {x: 0}),
        //markers: true, // For debugging purposes, remove in production
      });
    }
  }
}


setupScrollAnimation();
window.addEventListener('resize', () => {
  ScrollTrigger.getAll().forEach(trigger => trigger.kill());
  setupScrollAnimation();
});
  const h2Element = document.querySelector('.text-separate h2');
  let words = h2Element.textContent.split(' ');

  if (words.length > 1) {
    const lastTwoWords = words.slice(-2).join(' ');
    words = [...words.slice(0, -2), lastTwoWords];
  }

  h2Element.textContent = '';

  words.forEach(word => {
    const span = document.createElement('span');
    span.textContent = word;
    h2Element.appendChild(span);
  });
}


  // const stickyHeader = document.querySelector('.main-header--sticky');
  // let lastScrollY = window.scrollY;
  // let isScrollingDown = false;

  // function handleStickyHeaderVisibility() {
  //   const currentScrollY = window.scrollY;
  //   if (currentScrollY > lastScrollY) {
  
  //     isScrollingDown = true;
  //   } else if (currentScrollY < lastScrollY) {
  //     isScrollingDown = false;
  //   }
  //   if (isScrollingDown) {
  //     stickyHeader.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
  //     stickyHeader.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');
  //   } else {
  //     stickyHeader.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
  //     stickyHeader.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
  //   }
  //   lastScrollY = currentScrollY;
  // }


  // window.addEventListener('scroll', handleStickyHeaderVisibility);
  


  // AOS.init({
  //   offset: 0,
  //   duration: 500,
  //   easing: 'ease-in-out',
  // });
  if (err) {
    // handle hmr errors
    console.error(err);
  }


  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1500, function () {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  const customLightboxHTML = 
  `<div id="glightbox-body" class="glightbox-container">
    <div class="gloader visible"></div>
    <div class="goverlay"></div>
    <div class="gcontainer">
    <div id="glightbox-slider" class="gslider"></div>
    <button class="gnext gbtn rotate-180" tabindex="0" aria-label="Next" data-customattribute="example">
      <svg width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.292892 7.2929C-0.0976315 7.68342 -0.0976314 8.31659 0.292893 8.70711L6.65686 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928935L0.292892 7.2929ZM31 7L1 7L1 9L31 9L31 7Z" fill="#0D0E16"/>
      </svg>
    </button>
    <button class="gprev gbtn" tabindex="1" aria-label="Previous">
    <svg width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.292892 7.2929C-0.0976315 7.68342 -0.0976314 8.31659 0.292893 8.70711L6.65686 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928935L0.292892 7.2929ZM31 7L1 7L1 9L31 9L31 7Z" fill="#0D0E16"/>
    </svg>
    </button>
    <button class="gclose" tabindex="2" aria-label="Close">
    <svg width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M31.7534 28.6524C31.8316 28.7257 31.8936 28.8127 31.9359 28.9085C31.9782 29.0043 32 29.1069 32 29.2106C32 29.3143 31.9782 29.4169 31.9359 29.5127C31.8935 29.6085 31.8315 29.6955 31.7533 29.7688C31.6751 29.8421 31.5823 29.9003 31.4801 29.9399C31.3779 29.9796 31.2684 30 31.1578 30C31.0473 30 30.9378 29.9796 30.8356 29.9399C30.7334 29.9002 30.6406 29.842 30.5624 29.7687L16 16.1166L1.43759 29.7687C1.27968 29.9168 1.0655 30 0.842161 30C0.618825 30 0.404629 29.9169 0.246693 29.7688C0.0887574 29.6208 1.9349e-05 29.42 3.16386e-09 29.2106C-1.93427e-05 29.0012 0.0886819 28.8004 0.24659 28.6524L14.8091 15L0.24659 1.34764C0.0886819 1.19958 -1.93427e-05 0.998766 3.16386e-09 0.789389C9.58227e-06 0.685716 0.0218002 0.58306 0.064128 0.487282C0.106456 0.391504 0.168491 0.30448 0.246693 0.231178C0.324895 0.157877 0.417732 0.0997337 0.519902 0.060068C0.622073 0.0204024 0.731576 -8.97745e-06 0.842161 2.96206e-09C1.0655 1.81397e-05 1.27968 0.08321 1.43759 0.231275L16 13.8834L30.5624 0.231275C30.6406 0.157961 30.7334 0.0998022 30.8356 0.06012C30.9378 0.0204377 31.0473 8.98338e-06 31.1578 2.96206e-09C31.2684 -8.97745e-06 31.3779 0.0204024 31.4801 0.060068C31.5823 0.0997337 31.6751 0.157877 31.7533 0.231178C31.8315 0.30448 31.8935 0.391504 31.9359 0.487282C31.9782 0.58306 32 0.685716 32 0.789389C32 0.893062 31.9782 0.995722 31.9359 1.09151C31.8936 1.18729 31.8316 1.27433 31.7534 1.34764L17.191 15L31.7534 28.6524Z" fill="black"/>
      </svg>
  
    </button>
  </div>
  </div>`;

  const lightbox = GLightbox({ 
    lightboxHTML: customLightboxHTML,
  });

  // let lazyLoad = new LazyLoad({
  //   elements_selector: "[data-lazy]",
  //   load_delay: 300,
  // });
  
  initModalSuccess();

  let menu = new Menu();
  menu.init();

  
  if (body.classList.contains('home')) {

    let cardsScroll = new CardsScroll();
    cardsScroll.init();

    let marqueeText = new MarqueeText();
    marqueeText.init();

    let headingsScroll = new HeadingsScroll();
    headingsScroll.init();

    let marqueeImage = new MarqueeImage();
    marqueeImage.init();

    let carousels = new Carousels();
    carousels.init();
    
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
