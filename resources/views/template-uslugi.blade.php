{{--
  Template Name: Usługi template
--}}
@php
    $intro = get_field('intro');
    $content = $intro['content'] ?? null;
    $services = get_field('services');
    $items = $services['items'] ?? null;
    
@endphp

@extends('layouts.app')
@section('content')
@include('partials.hero', ['class' => 'object-center blur-[3px]'])
@if ($content)
<section class="services__intro">
  <div class="container">
    <div class="grid grid-cols-12 gap-6">
      <div class="col-span-full lg:col-span-10 lg:col-start-2 text-center" data-aos="fade-up">
        {!! $content !!}
      </div>
    </div>
  </div>
</section>
@endif
<section class="services__services my-12 lg:my-[72px]">
  <div class="container">
    @if ($items)
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-6 gap-6 lg:gap-y-12">
      @foreach ($items as $item)
      @php
          
          $image = $item['image'] ?? null;
          $title = $item['title'] ?? null;
          $subtitle = $item['subtitle'] ?? null;
          $content_i = $item['content'] ?? null;

      @endphp
      <div class="col-span-1" data-aos="fade-up">
        <div class="flex max-lg:flex-wrap justify-center lg:justify-end items-center relative min-h-[264px]">
          <div class="img relative lg:absolute left-0 lg:top-1/2 lg:-translate-y-1/2 ">
            {!! wp_get_attachment_image($image, 'full', false, ["class" => "max-w-[264px] h-[264px] object-center object-cover aspect-1/1 rounded-3xl relative z-[5] shadow-cien-1", 'loading' => 'lazy']) !!}
          </div>
          <div class="max-lg:-mt-6 text w-full lg:w-[calc((360/552)*100%)] rounded-2xl bg-white flex flex-col gap-3 relative z-10 shadow-cien-1 p-6 ">
            <div class="title text-primary-500">
              @if ($title)
              <div class="text-h4 font-primary">
                <h2>{!! $title !!}</h2>
              </div>
              @endif
              @if ($subtitle)
              <div class="undertitle text-B12">
                <span>{!! $subtitle !!}</span>
              </div>
              @endif
            </div>
            @if ($content_i)
            <div class="desc">
            
              {!! $content_i !!}
            </div>
            @endif
            
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endif
  </div>
</section>
@include('partials.cta')
@endsection

