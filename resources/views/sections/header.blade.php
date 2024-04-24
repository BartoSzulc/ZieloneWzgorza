@php
// $data = get_field('header', 'option');
@endphp

<header class="main-header banner py-5 lg:py-6 z-[99] fixed lg:absolute top w-full max-lg:bg-white text-white">
  <div class="container relative z-50">
    <div class="flex items-center justify-between">
      <a class="brand flex transition-all duration-500 ease-in-out hover:opacity-40" href="{{ home_url() }}">
        <div class="lg:hidden max-w-[104px]">
          @svg('images.logo_black', 'w-[104px] h-[22px]')
        </div>
        <div class="hidden lg:block">
          @svg('images.logo')
        </div>
      </a>
      @include('partials.header.menu')
    </div>
  </div>
</header>

<div class="max-lg:hidden text-texter py-6 main-header--sticky fixed top-0 transform -translate-y-full transition-all duration-500 ease-in-out z-[9999] opacity-0 bg-white w-full shadow-cien-1">
  <div class="container">
    <div class="flex items-center justify-between relative ">
      <a class="brand flex transition-all duration-500 ease-in-out hover:opacity-40" href="{{ home_url() }}">
        @svg('images.logo_header_black')
      </a>
      @include('partials.header.menu')
    </div>
  </div>
</div>


