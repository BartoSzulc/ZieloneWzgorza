import LazyLoad from "vanilla-lazyload";
import { domReady } from '@roots/sage/client';

import { initMenu } from './components/partials/menu';
import { initModalSuccess } from './components/partials/modalSuccess';
import { initscrollToID } from './components/partials/scrollToID';
import { initgLightbox } from './components/partials/gLightbox';
import { initStickyMenu } from './components/partials/stickyMenu';
import { initAOS } from './components/partials/aos';
import { initForm } from './components/partials/form';
import { initTitleHeight } from './components/partials/titleHeight';
import { initMap } from './components/partials/map';
import { initMapContact } from './components/partials/mapContact';
import { initDatePicker } from './components/partials/datePicker';
import Accordion from 'accordion-js';
import Carousels from "./components/Carousels";
import SlimSelect from 'slim-select';
import WooGallery from "./components/partials/RoomGallery";

/**
 * app.main
 */

const main = async (err) => {
  
  if (err) {
    // handle hmr errors
    console.error(err);
  }
  let carousels = new Carousels();
  carousels.init();
  
  let wooGallery = new WooGallery();
  wooGallery.init();

  const buttons = document.querySelectorAll('.btn.btn--primary');
  buttons.forEach(button => {
      if (button.querySelector('svg')) {
          button.classList.add('btn--svg');
      }
  });
  
  let lazyLoad = new LazyLoad({
    elements_selector: "[data-lazy]",
    load_delay: 300,
  });
  const accordions = Array.from(document.querySelectorAll('.accordion-container'));
  new Accordion(accordions, {
    duration: 750,
    showMultiple: true,
    activeClass: 'is-active',
  });
  initStickyMenu();
  initMenu();
  initAOS();
  initModalSuccess();
  initscrollToID();
  initgLightbox();
  initForm();
  initTitleHeight();
  initDatePicker();

  if (document.body.classList.contains('page-template-template-atrakcje')) {
    initMap();
  }
  if (document.body.classList.contains('page-template-template-contact')) {
    initMapContact();
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
