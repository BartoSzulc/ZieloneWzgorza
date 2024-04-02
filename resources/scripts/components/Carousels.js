import Component from "./Component";
import Swiper from "swiper";
import { Autoplay, EffectFade, Pagination, Navigation, } from 'swiper/modules';
import { initCaseSlider } from './partials/caseSlider';
import { initTestimonialSlider } from './partials/testimonialSlider.js';


Swiper.use([Pagination, Autoplay, EffectFade, Navigation ]);

export default class Carousels extends Component {

    constructor() {
      super();
      this.caseSlider = document.querySelector('.home__case-study') !== null;
      this.testimonialSlider = document.querySelector('.home__testimonials') !== null;
    }
    init() {
        if (this.caseSlider) {
          initCaseSlider();
        }
        if (this.testimonialSlider) {
          initTestimonialSlider();
        }
    }

}