<div class="flex items-center">
    @if (has_nav_menu('primary_navigation'))
    <nav class="hidden nav-primary lg:flex items-center justify-end h-full" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu([
        'theme_location' => 'primary_navigation', 
        'menu_class' => 'nav font-light text-B16 flex items-center gap-6', 
        'add_li_class' => 'transition-all duration-500 ease-in-out hover:text-primary100',
        'echo' => false
        ])!!}
    </nav>
    @endif
    <div class="grow-[0] lg:hidden w-full flex justify-end">
        <button id="menuButton" class="w-8 h-8 relative focus:outline-none  js-button">
            <span class="sr-only">Open main menu</span>
            <div class="transition-all duration-500 ease-in-out icon-open block w-8 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 8.5H27" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 13.5H27" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5 18.5H27" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11 23.5H27" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 
            </div>
            <div class="icon-close">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 7L7 25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M25 25L7 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
                
        </button>
    </div>  
</div>