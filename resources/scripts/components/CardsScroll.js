import Component from "./Component";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default class CardsScroll extends Component {

    constructor() {
        super();
      
      }
    
      init() {
        function setGridHeight() {
          const grids = document.querySelectorAll('.home__click .work_card .grid');
          let maxHeight = 0;
          grids.forEach(grid => {
              const height = grid.offsetHeight;
              if (height > maxHeight) {
                  maxHeight = height;
              }
          });
          grids.forEach(grid => {
              grid.style.height = `${maxHeight}px`;
          });
      }
      
      function calculateDynamicEnd(lastCard) {
          const viewportHeight = window.innerHeight;
          const lastCardHeight = lastCard.offsetHeight;
          const dynamicEnd = `bottom+=${lastCardHeight - viewportHeight} bottom`;
          return dynamicEnd;
      }
      
      function initializeAnimations() {
          const cardsWrappers = gsap.utils.toArray(".card-wrapper");
          const cards = gsap.utils.toArray(".card");
      
          cardsWrappers.forEach((wrapper, i) => {
              const card = cards[i];
              let scale = 1,
                  rotation = 0;
              if (i !== cards.length - 1) {
                  scale = 0.85 + 0.025 * i;
              }
              const isLastCard = i === cardsWrappers.length - 1;
      
              gsap.to(card, {
                  scale: scale,
                  rotationX: rotation,
                  transformOrigin: "center center",
                  duration: 1,
                  ease: "linear",
                  scrollTrigger: {
                      trigger: wrapper,
                      start: "top ",
                      end: isLastCard ? () => calculateDynamicEnd(wrapper) : "bottom bottom",
                      endTrigger: isLastCard ? wrapper : ".wrapper",
                      scrub: true,
                      pin: wrapper,
                      pinSpacing: false,
                      markers: false,
                      id: i + 1
                  }
              });
          });
      }
      
      function init() {
          if (window.innerWidth > 1024) {
              setGridHeight();
              initializeAnimations();
              window.addEventListener('resize', setGridHeight);
              window.addEventListener('resize', () => {
                  ScrollTrigger.refresh();
              });
          } else {
              // Optionally, handle the case for smaller viewports or cleanup
          }
      }
      
      // Run the init function on window load and resize
      window.addEventListener('load', init);
      window.addEventListener('resize', init);
    }      
      
    
}
