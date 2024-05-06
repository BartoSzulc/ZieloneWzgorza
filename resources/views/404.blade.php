@extends('layouts.app')
@php 
    $data = get_field('hero', 16);
    $image = $data['image'] ?? null;
@endphp
@section('content')
<section class="hero__template relative flex overflow-hidden h-[400px] lg:h-[450px] rounded-hero font-primary mb-60 lg:mb-full">
  <div class="absolute top-0 w-full h-full">
      {!! wp_get_attachment_image($image, 'full', false, ["class" => "object-cover w-full h-full", 'loading' => 'lazy']) !!}
  </div>
  <div class="container relative z-10 h-[calc(100%-72px)] mt-auto lg:h-full text-white">
      <div class="flex items-center flex-col gap-2 text-center justify-center h-full">
        <div class="text-h1 drop-shadow-lg">
          <h1 class="text-shadow-hero" data-aos="fade-up">
            404
          </h1>
      </div>
      </div>
  </div>
</section>
<section class="hero__template text-texter  relative wysiwyg my-12">
  <div class="container">
      <div class="flex flex-wrap gap-5 items-center justify-center w-full flex-col" data-aos="fade-up">

        <div class="text-h3 lg:text-h3 text-center" >
          <h2>{{ pll__('Strona nie istnieje') }}</h2>
        </div>
        <a href="/" class="btn btn--primary" ><span>{{ pll__('Powrót') }}</span></a>
       </div>
  </div>
</section>
@endsection
