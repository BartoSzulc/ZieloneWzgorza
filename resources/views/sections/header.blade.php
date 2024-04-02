@php
// $data = get_field('header', 'option');
@endphp

<header class="banner 3xl:py-9 py-4 z-[99] fixed top w-full">
  <div class="container relative z-50">
    <div class="flex items-center justify-between">
      <a class="brand flex xl:w-[160px] xl:h-[160px] w-20 h-20" href="{{ home_url() }}">
        @svg('images.logo', 'xl:h-[160px] h-20')
      </a>
      @include('partials.header.menu')
    </div>
  </div>
  @include('partials.header.mobile-menu')
</header>


