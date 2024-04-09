import Component from "./Component";
import Swiper from "swiper";
import { Autoplay, EffectFade, Pagination, Navigation, } from 'swiper/modules';

import { initTestimonialSlider } from './partials/testimonialSlider.js';
//import { initProductSlider } from './partials/ProductSlider.js';


Swiper.use([Pagination, Autoplay, EffectFade, Navigation ]);

export default class Carousels extends Component {

    constructor() {
      super();
      this.testimonialSlider = document.querySelector('.home__testimonials') !== null;
    }
    init() {
        if (this.testimonialSlider) {
          initTestimonialSlider();
        }
    }

}