@php
    $data = get_field('footer', 'option');
    $socials = $data['socials'] ?? null;
@endphp
@if (is_front_page() ||is_page_template( 'template-cennik.blade.php'))
    @include('partials.contact-form')
@endif
@include('sections.modal')
<footer class="relative">
    <div class="container">
        <div class="pt-6 lg:pt-8">
            <div class="text-center">
                <a class="w-full flex items-center justify-center transition-all duration-500 ease-in-out hover:opacity-40 max-lg:mb-2" href="{{ home_url() }}">
                    <img class="max-lg:hidden" src="{{ asset('images/logo_black.svg') }}" alt="">
                    <img class="lg:hidden" src="{{ asset('images/icons/logo_footer_mobile.svg') }}" alt=""> 
                </a>
            </div>
            <div class="flex flex-col gap-8 items-center justify-center py-6">
                @if (has_nav_menu('footer_navigation'))
                <nav class="nav-footer" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
                  {!! wp_nav_menu([
                    'theme_location' => 'footer_navigation', 
                    'menu_class' => 'nav text-primary-200 flex max-lg:flex-col max-lg:text-center items-center justify-center gap-8', 
                    'add_li_class' => 'text-B16 transition-all duration-500 ease-in-out hover:text-primary-500',
                    'echo' => false
                    ])!!}
                </nav>
                @endif
                <div class="social-icons flex items-center gap-6">
                    <a target="_blank" rel="noopener" href="" class="icon">
                        @svg('images.icons.fb')
                    </a>
                    <a target="_blank" rel="noopener" href="" class="icon">
                        @svg('images.icons.ig')
                    </a>
                    <a target="_blank" rel="noopener" href="" class="icon">
                        @svg('images.icons.tiktok')
                    </a>
                    <a target="_blank" rel="noopener" href="" class="icon">
                        @svg('images.icons.linkedin')
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy text-center py-6 text-B12">
        <p>© {{ date('Y') }} Zielone Wzgórza. All rights reserved.</p>
    </div>
</footer>
@include('partials.header.mobile-menu')


