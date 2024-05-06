{{--
  Template Name: Kontakt template
--}}


@extends('layouts.app')
@section('content')
@php

  $contact_info = get_field('contact_info');
  $socials = get_field('socials');
  $form_title = get_field('form_title');
  $shortcode = get_field('shortcode');

@endphp
@include('partials.hero' , ['class' => 'object-center max-3xl:object-top'])
<section class="kontakt__main relative">
  <div class="container">
    <div class="lg:grid grid-cols-12 lg:gap-6">
      <div class="col-span-full lg:col-span-4 flex justify-center flex-col">
        <a class="mb-8 block transition-all duration-500 ease-in-out hover:opacity-40" data-aos="fade-up" href="{{ home_url() }}">@svg('images.logo_black')</a>
        
          
        <div class="flex flex-col gap-4"> 
          @if ($contact_info)
          @foreach ($contact_info as $item)
            @php 
              $type = $item['type'];
              $icon = $item['icon'];
              $text = $item['text'];
              $link = $item['link'];
              $link_text = $item['text_link'];
            @endphp

            @if ($type == 'text')
            <p class="item flex gap-4 items-center" data-aos="fade-up">
              <img src="{{$icon['url']}}" alt="">
              <span>{!! $text !!}</span>
            </p>
            @else
            <a class="item flex gap-4 items-center transition-all duration-500 ease-in-out hover:text-primary-500 hover:underline" href="{{ $link }}" target="_blank" data-aos="fade-up">
              <img src="{{$icon['url']}}" alt="">
              <span>{!! $link_text !!}</span>
            </a>
            @endif
          @endforeach
          @endif

         
        

          @if ($socials)
          <div class="social-icons gap-4 flex items-center">
            @foreach ($socials as $item)
              @php 
                $icon = $item['icon'];
                $link = $item['link'];
              @endphp
              <a target="_blank" rel="noopener" href="{{ $link }}" class="transition-all duration-500 ease-in-out icon hover:scale-110" data-aos="fade-up">
                <img src="{{$icon['url']}}" alt="">
              </a>
            @endforeach
          </div>
          @endif
        </div>
        
      </div>
      <div class="col-span-full lg:col-span-8 lg:col-start-5 relative z-10 mt-12">
        <div class="bg-white rounded-3xl shadow-cien-1 px-6 pt-8 pb-6">
            <div class="max-lg:text-center text-h3 font-primary mb-30 font-semibold" data-aos="fade-up">
                <h2>Zachęcamy do kontaktu</h2>
            </div>
            {!! do_shortcode('[contact-form-7 id="eee657f" title="Formularz 1"]') !!}
        </div>
      </div>
    </div>
  </div>
</section>
<div id="mapContact" class="w-full h-[640px] lg:h-[500px] my-12 lg:my-20" data-aos="fade-up"></div>

@endsection
