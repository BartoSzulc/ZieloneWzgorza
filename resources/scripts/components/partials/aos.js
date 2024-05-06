import AOS from 'aos';

export function initAOS() {

    AOS.init({
        offset: 0,
        duration: 500,
        easing: 'ease-in-out',
        once: true,
    });
    
}