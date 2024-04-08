import LazyLoad from "vanilla-lazyload";
import { domReady } from '@roots/sage/client';
import $ from 'jquery';
import { initMenu } from './components/partials/menu';
import { initModalSuccess } from './components/partials/modalSuccess';
import { initscrollToID } from './components/partials/scrollToId';
import { initgLightbox } from './components/partials/gLightbox';
import { initStickyMenu } from './components/partials/stickyMenu';
import { initAOS } from './components/partials/aos';
import Carousels from "./components/Carousels";
/**
 * app.main
 */

const main = async (err) => {
  
  if (err) {
    // handle hmr errors
    console.error(err);
  }

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
