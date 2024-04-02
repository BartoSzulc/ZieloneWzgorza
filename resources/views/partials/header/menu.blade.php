<div class="flex items-center">
    @if (has_nav_menu('primary_navigation'))
    <nav class="hidden nav-primary lg:flex items-center justify-end h-full" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu([
        'theme_location' => 'primary_navigation', 
        'menu_class' => 'nav font-light 3xl:text-B24 text-B20 flex items-center 3xl:gap-8 gap-6', 
        'add_li_class' => 'text-white transition-all duration-500 ease-in-out hover:text-primary100',
        'echo' => false
        ])!!}
    </nav>
    @endif
    <div class="grow-[0] lg:hidden w-full flex justify-end">
        <button id="menuButton" class="text-white  w-[22px] h-[22px] relative focus:outline-none  js-button">
            <span class="sr-only">Open main menu</span>
            <div class="block w-[22px] absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <span aria-hidden="true" class="menu-line block absolute h-0.5 w-[22px] bg-current transform transition duration-500 ease-in-out -translate-y-1.5 rounded-full"></span>
                <span aria-hidden="true" class="menu-line block absolute h-0.5 w-[22px] bg-current transform transition duration-500 ease-in-out rounded-full"></span>
                <span aria-hidden="true" class="menu-line block absolute h-0.5 w-[22px] bg-current transform transition duration-500 ease-in-out translate-y-1.5 rounded-full"></span>
            </div>
        </button>
    </div>  
</div>