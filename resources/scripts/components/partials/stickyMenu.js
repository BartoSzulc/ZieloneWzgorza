
export function initStickyMenu() {

 const stickyHeader = document.querySelector('.main-header--sticky');
  let lastScrollY = window.scrollY;
  let isScrollingDown = false;

  function handleStickyHeaderVisibility() {
    const currentScrollY = window.scrollY;
    if (currentScrollY > lastScrollY) {
  
      isScrollingDown = true;
    } else if (currentScrollY < lastScrollY) {
      isScrollingDown = false;
    }
    if (isScrollingDown) {
      stickyHeader.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
      stickyHeader.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');
    } else {
      stickyHeader.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
      stickyHeader.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
    }
    lastScrollY = currentScrollY;
  }

  window.addEventListener('scroll', handleStickyHeaderVisibility);
  
}