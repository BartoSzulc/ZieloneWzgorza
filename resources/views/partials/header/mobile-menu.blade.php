@php
    $data = get_field('header', 'option');
    $socials = $data['socials'] ?? null;
@endphp

<aside class="z-10 fixed mobile-menu flex flex-col ">
  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary grow" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'flex h-full w-full', 'menu_class' => ' p-8 mobile-menu-class w-full mt-[72px] font-secondary text-white flex flex-col', 'echo' => false]) !!}
    </nav>
  @endif
  @if ($socials)
    @include('partials.social-icons', ['class' => 'justify-center'])
  @endif
  @if ($socials)
  <div class="social-icons flex items-center justify-center gap-10">
    @foreach ($socials as $item)
        @php 
            $icon = $item['icon'];
            $link = $item['link'];
        @endphp
          <a target="_blank" rel="noopener" href="{{ $link }}" class="transition-all duration-500 ease-in-out icon hover:scale-110">
            <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}">
        </a>
    @endforeach
  </div>
@endif
</aside>
