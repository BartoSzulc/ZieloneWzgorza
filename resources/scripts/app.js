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
import Carousels from "./components/Carousels";
import SlimSelect from 'slim-select';

/**
 * app.main
 */

const main = async (err) => {
  
  if (err) {
    // handle hmr errors
    console.error(err);
  }
  
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

  initStickyMenu();
  initMenu();
  initAOS();
  initModalSuccess();
  initscrollToID();
  initgLightbox();
  initForm();
  initTitleHeight();

  let carousels = new Carousels();
  carousels.init();
  
  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
