import Component from "./Component";
import gsap from "gsap";

export default class MarqueeText extends Component {

  constructor() {
    super();

  }

  init() {
    let currentScroll = 0;
    let isScrollingDown = true;

    let tween = gsap.to(".marquee__part", { xPercent: -100, repeat: -1, duration: 7, ease: "linear" }).totalProgress(0.5);

    gsap.set(".marquee__inner", { xPercent: -50 });

    window.addEventListener("scroll", function () {

      gsap.to(tween, {
        timeScale: isScrollingDown ? 1 : -1
      });

      currentScroll = window.scrollY;
    });
  }

}
