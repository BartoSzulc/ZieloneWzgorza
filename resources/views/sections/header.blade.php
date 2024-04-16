@php
// $data = get_field('header', 'option');
@endphp

<header class="banner 3xl:py-9 py-4 z-[99999] fixed top w-full">
  <div class="container relative z-50">
    <div class="flex items-center justify-between">
      <a class="brand flex" href="{{ home_url() }}">
        @svg('images.logo')
      </a>
      @include('partials.header.menu')
    </div>
  </div>
  @include('partials.header.mobile-menu')
</header>


