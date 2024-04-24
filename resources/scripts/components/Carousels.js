import Component from "./Component";

import { initTestimonialSlider } from './partials/testimonialSlider.js';
import { initPhotoApartmentSlider } from './partials/photoApartmentSlider.js';
import { initApartmentsSlider } from './partials/ApartmentsSlider.js';
import { initAtrakcjeSlider } from './partials/AtrakcjeSlider.js';


export default class Carousels extends Component {

    constructor() {
      super();
      this.testimonialSlider = document.querySelector('.home__opinie') !== null;
      this.photoApartmentSlider = document.querySelector('.home__apartments') !== null;
      this.ApartmentsSlider = document.querySelector('.home__apartments') !== null;
      this.AtrakcjeSlider = document.querySelector('.home__atrakcje') !== null;
    }
    init() {
        if (this.testimonialSlider) {
          initTestimonialSlider();
        }
        if (this.photoApartmentSlider) {
          initPhotoApartmentSlider();
        }
        if (this.ApartmentsSlider) {
          initApartmentsSlider();
        }
        if (this.AtrakcjeSlider) {
          initAtrakcjeSlider();
        }
    }

}