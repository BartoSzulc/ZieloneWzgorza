import Component from "./Component";

export default class Menu extends Component {

    constructor() {
        super();
    }
    
    init() {
        const isMobile = window.innerWidth < 1024;
        let isOpen = false; // Track if the menu is open

        // Function to toggle the menu open/close
        const toggleMenu = (shouldOpen) => {
            isOpen = shouldOpen !== undefined ? shouldOpen : !isOpen; // Toggle or set the state based on argument

            // Toggle classes for the menu lines
            document.querySelectorAll('.js-button .menu-line:first-child').forEach(firstLine => {
                firstLine.classList.toggle('rotate-45', isOpen);
                firstLine.classList.toggle('-translate-y-1.5', !isOpen);
            });

            document.querySelectorAll('.js-button .menu-line:nth-child(2)').forEach(middleLine => {
                middleLine.classList.toggle('opacity-0', isOpen);
            });

            document.querySelectorAll('.js-button .menu-line:last-child').forEach(lastLine => {
                lastLine.classList.toggle('-rotate-45', isOpen);
                lastLine.classList.toggle('translate-y-1.5', !isOpen);
            });

            // Toggle the mobile menu
            const menus = document.querySelectorAll('.mobile-menu');
            menus.forEach(menu => {
                menu.classList.toggle('active', isOpen);
            });
        };

        // Function to close the menu explicitly
        const closeMenu = () => {
            if (isOpen) toggleMenu(false);
        };

        // Event listener for .js-button clicks
        document.querySelectorAll('.js-button').forEach(button => {
            button.addEventListener('click', () => {
                toggleMenu(); // Toggle menu without argument will just invert its current state
            });
        });

        // Event listener for menu item clicks
        document.querySelectorAll(".menu-item a[href]:not([href*='/oferta/']), .menu-item a[href^='/oferta/#']").forEach((menuItem) => {
            menuItem.addEventListener("click", closeMenu);
        });
    }
}
