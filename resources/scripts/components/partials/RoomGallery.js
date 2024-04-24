import Swiper from "swiper";

import { Navigation, Pagination, EffectFade, Autoplay, Thumbs, Controller, FreeMode } from 'swiper/modules';

Swiper.use([Navigation, Pagination, EffectFade, Autoplay, Thumbs, Controller, FreeMode]);

export default class WooGallery {
  constructor() {
    this.galleryContainers = document.querySelectorAll(".galleryPokoje");
  }

  init() {
    this.galleryContainers.forEach((container) => {
      this.createGallery(container);
    });
  }

  createGallery(container) {
    const galleryTopSelector = container.querySelector(".gallery-slider");
    const galleryThumbsSelector = container.querySelector(".gallery-thumbs");

    if (galleryThumbsSelector) {
      let sliderThumbs = new Swiper(galleryThumbsSelector, {
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        spaceBetween: 16,
        breakpoints: {
          375: {
            spaceBetween: 24,
          },
        },
        // Assuming navigation is within the same container
        navigation: {
          nextEl: container.querySelector(".swiper-arrow-right"),
          prevEl: container.querySelector(".swiper-arrow-left"),
        },
      });

      new Swiper(galleryTopSelector, {
        slidesPerView: 1,
        speed: 1500,
        loop: true,
        autoHeight: false,
        thumbs: {
          swiper: sliderThumbs,
        },
      });
    } else {
      new Swiper(galleryTopSelector, {
        slidesPerView: 1,
        speed: 1500,
        loop: false,
        autoHeight: false,
      });
    }
  }
}