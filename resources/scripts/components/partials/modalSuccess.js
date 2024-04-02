export function initModalSuccess() {
    
    const form = document.querySelector('.wpcf7-form');
    const modal = document.querySelector('#contactModal');
    const modalContent = modal?.querySelector('.modal-content');
    const modalInside = modal?.querySelector('.modal-inside');
  
    const showModal = () => {
      modal.classList.remove('hidden');
      modalContent.classList.replace('animate-scaleDown', 'animate-scaleUp');
    };
  
    const hideModal = () => {
      modalContent.classList.replace('animate-scaleUp', 'animate-scaleDown');
      setTimeout(() => modal.classList.add('hidden'), 200);
    };
  
    if (modal) {
      [modal, modalInside].forEach(element => element.addEventListener('click', hideModal));
      modalContent?.addEventListener('click', (e) => e.stopPropagation());
      const closeButtons = modal.querySelectorAll('.closeModal');
      closeButtons?.forEach(button => {
        button.addEventListener('click', hideModal);
      });
    }
  
    if (form) {
      const observer = new MutationObserver(mutations => {
        mutations.forEach(mutation => {
          if (mutation.attributeName === 'class') {
            const classList = mutation.target.classList;
            if (classList.contains('sent')) {
              showModal();
            }
          }
        });
      });

      observer.observe(form, {
        attributes: true 
      });
    }
}