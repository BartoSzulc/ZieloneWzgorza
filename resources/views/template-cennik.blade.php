{{--
  Template Name: Cennik template
--}}

@php
  $data = get_field('addprices');

@endphp
@extends('layouts.app')
@section('content')

@include('partials.hero' , ['class' => 'object-center max-3xl:object-top blur-[3px]'])

<section class="cennik__add my-12 lg:my-20">
  <div class="container">
    @if ($data)
    @foreach ($data as $item)
    @php
      $title = $item['title'] ?? null;
      $elements = $item['elements'] ?? null;
      
      
    @endphp
    <div class="flex flex-col gap-4 mb-12 lg:mb-20">
      @if ($title)
      <div class="w-full lg:text-center text-h2 font-primary" data-aos="fade-up">
        <h2>{!! $title !!}</h2>
      </div>
      @endif
      @if ($elements)
        @foreach ($elements as $element)
        @php
            $version = $element['element_version'] ?? null;
            $simple = $element['element_simple'] ?? null;
            $accordion = $element['element_accordion'] ?? null;
            $accordion_items = $accordion['element_accordion_items'] ?? null;
        @endphp
        @if ($version == 'v1')
        <div class="normal-price flex max-lg:flex-wrap items-center justify-between gap-4 lg:gap-12 lg:p-4">
          <div class="left flex flex-col gap-1">
            @if ($simple['element_title'])
            <div class="text-h5 font-primary" data-aos="fade-up">
              <h2>{!! $simple['element_title'] !!}</h2>
            </div>
            @endif
            @if ($simple['element_subtitle'])
            <div class="text-B12" data-aos="fade-up">
              {!! $simple['element_subtitle'] !!}
            </div>
            @endif
          </div>
          @if ($simple['element_price'])
          <div class="right price whitespace-nowrap" data-aos="fade-up">
            <strong class="text-B20">{!! $simple['element_price'] !!}</strong>
            <span class="text-B12">zł</span>
          </div>
          @endif
        </div>
        @else
        <div class="accordion-container accordion-price">
          <div class="ac group rounded-b-2xl transition-all duration-500 ease-in-out" data-aos="fade-up">
            <h2 class="ac-header ">
              <div class="ac-trigger flex gap-12 grow items-center bg-white m-0 p-4 relative transition-all duration-500 ease-in-out rounded-t-2xl  group-[.is-active]:bg-primary-10 ">
              @if ($accordion['element_title'])
              <div class="flex flex-col gap-1 text-left ">
                <div class="transition-all duration-500 ease-in-out text-h5 font-primary group-hover:text-primary-500 group-[.is-active]:text-primary-500">
                  <h3> {!! $accordion['element_title'] !!} </h3>
                </div>
                @if ($accordion['element_subtitle'])
                <div class="text-B12">
                  {!! $accordion['element_subtitle'] !!}
                </div>
                @endif
              </div>
              @endif
              <span class="transition-all duration-500 ease-in-out group-[.is-active]:-rotate-180 ml-auto">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="transition-all duration-500 ease-in-out group-hover:fill-primary-500" opacity="0.2" d="M19.5 9.5L12 17L4.5 9.5H19.5Z" fill="#6E8C03" fill-opacity="0.2"/>
                  <path class="transition-all duration-500 ease-in-out group-hover:fill-primary-500 group-hover:stroke-primary-500 group-hover:[stroke-opacity:1]  group-[.is-active]:fill-primary-500 group-[.is-active]:stroke-primary-500 group-[.is-active]:[stroke-opacity:1]" d="M19.5 9.5L12 17L4.5 9.5H19.5Z" fill="#323232" fill-opacity="0.2" stroke="#333333" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
              </div>
            </h2>
            @if ($accordion_items)
            <div class="ac-panel px-4 overflow-hidden transition-accordion motion-reduce:transition-none ease bg-white rounded-b-2xl">
              @foreach ($accordion_items as $accordion_item)
              @php
                $title = $accordion_item['element_accordion_title'] ?? null;
                $price = $accordion_item['element_accordion_price'] ?? null;
              @endphp
              <div class="flex items-center justify-between py-3">
                @if ($title)
                <div class="left text-B20">
                  <p>{!! $title !!}</p>
                </div>
                @endif
                @if ($price)
                <div class="right price whitespace-nowrap">
                  <strong class="text-B20">{!! $price !!}</strong>
                  <span class="text-B12">zł</span>
                </div>
                @endif
              </div>
              @endforeach
            </div>
            @endif
          </div>
        </div>
        @endif
        @endforeach
      @endif

      

      
    </div>
    @endforeach
    @endif

  </div>
</section>

@endsection
