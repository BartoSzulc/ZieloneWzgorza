@php
    $data = get_field('footer', 'option');
    $socials = $data['socials'] ?? null;
@endphp
@include('sections.modal')
<footer class="pt-30 pb-10 relative max-lg:py-4">
<div class="container">
    <div class="grid lg:grid-cols-12 grid-cols-6 lg:gap-6 gap-4">
        <div class="col-span-full lg:col-span-2 flex items-center max-lg:justify-center">
            <div class="footer__logo">
                <a href="{{ home_url() }}">@svg('images.logo_black', 'xl:h-[168px] h-[160px]')</a>
            </div>
        </div>
        @if ($socials)
        <div class="col-span-full lg:col-span-3 flex items-center max-lg:justify-center">
            @include('partials.social-icons', ['class' => ''])
        </div>
        @endif
        <div class="col-span-full lg:col-span-7 max-lg:mt-8">
            @if (has_nav_menu('primary_navigation'))
            <nav class="nav-primary flex items-center justify-end h-full max-lg:justify-center" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              {!! wp_nav_menu([
                'theme_location' => 'primary_navigation', 
                'menu_class' => 'nav font-light xl:text-B20 lg:text-desc text-B20 flex items-center xl:gap-5 lg:gap-4 gap-8 max-lg:flex-wrap max-lg:justify-center', 
                'add_li_class' => 'text-black10 transition-all duration-500 ease-in-out hover:text-primary60',
                'echo' => false
                ])!!}
            </nav>
            @endif
        </div>

    </div>
    <div class="w-full flex items-center justify-end text-B20 font-light text-primary60 max-lg:mt-12 max-lg:text-center max-lg:justify-center">
        <p>© {{ date('Y') }} Niedaria.pl. All rights reserved.</p>
    </div>
</div>
    

</footer>


