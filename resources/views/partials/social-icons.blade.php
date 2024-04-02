

<div class="social-icons flex xl:gap-6 lg:gap-4 gap-8 items-center {{ $class }}">
    @foreach ($socials as $social)
    @php
        $icon = $social['icon'] ?? null;
        $text = $social['link'] ?? null;
    @endphp
    
    <div class="icon">
        <a href="{!! $text !!}" class="transition-all duration-500 ease-in-out hover:scale-110">
            {!! wp_get_attachment_image($icon, 'full', false, ['class' => 'transition-all duration-500 ease-in-out hover:scale-110']) !!}
        </a>
    </div>
    @endforeach
</div>