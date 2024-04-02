import Component from "./Component";
import gsap from "gsap";

export default class MarqueeText extends Component {

  constructor() {
    super();
  }

  init() {
    const headings = gsap.utils.toArray('.layout_heading');
    const layoutComponent = document.querySelector('.layout_component');
    const layoutHeadingList = document.querySelector('.layout_heading-list'); // Assuming this is the class of the container

    const triggerStart = "top top";

    const masterTimeline = gsap.timeline({
      scrollTrigger: {
          trigger: layoutComponent,
          start: triggerStart,
          scrub: true,
          markers: false,
          end: () => layoutComponent.offsetHeight + " bottom",
      }
    });

    headings.forEach((heading, i) => {
      let yPercentValue;
      
      if (i === 0) {
          yPercentValue = 0;
      } else if (i === 1) {
          yPercentValue = 0;
      } else {
          yPercentValue = -100 * (i - 1);
      }

      gsap.set(heading, { 
          yPercent: yPercentValue, 
          opacity: i === 0 ? 1 : 0
      }); 
    });

    headings.forEach((heading, i) => {
      const delay = i === 0 ? 0 : '-=0.9';
      
      if (i < headings.length - 1) {
        masterTimeline.to(heading, {
            yPercent: i === 0 ? -100 : '-=100',
            opacity: i === 0 ? 0 : 1,
            duration: 1,
            ease: "none"
        }, delay);
    
        if (i > 0) {
            masterTimeline.to(heading, {
            yPercent: '-=100',
            opacity: 0,
            duration: 1,
            ease: "none"
            }, '+=0.2');
        }
      } else {
        masterTimeline.to(heading, {
            yPercent: '-=100',
            opacity: 1,
            duration: 1,
            ease: "none"
        }, delay);
      }
    });

    // Function to set the height of the .layout_heading-list and all headings
    const setHeightOfHeadingListAndHeadings = () => {
      let maxHeight = 0;
      headings.forEach(heading => {
        const headingHeight = heading.offsetHeight;
        if (headingHeight > maxHeight) {
          maxHeight = headingHeight;
        }
      });

      // Set the maximum height to the .layout_heading-list container
      layoutHeadingList.style.height = `${maxHeight}px`;

      // Set the maximum height to all headings
      headings.forEach(heading => {
        heading.style.height = `${maxHeight}px`;
      });
    };

    // Call the function on load and on resize
    window.addEventListener('load', setHeightOfHeadingListAndHeadings);
    window.addEventListener('resize', setHeightOfHeadingListAndHeadings);
  }

}
