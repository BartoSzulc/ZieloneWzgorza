{{--
  Template Name: Turnusy template
--}}


@extends('layouts.app')
@section('content')

@include('partials.hero' , ['class' => 'object-center max-3xl:object-bottom blur-[3px]'])

@php
    $intro = get_field('intro');
    $intro_sec = get_field('intro_sec');
    $offer = get_field('offer');
    $content = $intro_sec['content'] ?? null;


    $zabiegi = get_field('zabiegi');
    $atrakcje = get_field('dodatkowe_atrakcje');
@endphp

@if ($intro['content'])
<section class="turnusy__intro">
  <div class="container">
    <div class="grid grid-cols-12 gap-6">
      <div class="col-span-full lg:col-span-10 lg:col-start-2 text-center" data-aos="fade-up">
        {!! $intro['content'] !!}
      </div>
    </div>
  </div>
</section>
@endif

@if ($intro_sec['content'])
<section class="turnusy__intro-sec my-12 lg:my-20 max-lg:text-center">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <div class="col-span-1 flex flex-col gap-4 pt-[18px]" data-aos="fade-up">
        <div class="text-h2 font-primary text-primary-500" >
          {!! $intro_sec['title'] !!}
        </div>
        {!! $content !!}
      </div>
      @if ($intro_sec['image'])
      <div class="col-span-1">
        <div class="img">
          <img class="rounded-2xl" src="{{ $intro_sec['image']['url'] }}" alt="{{ $intro_sec['image']['alt'] }}">
        </div>
      </div>
      @endif
    </div>
  </div>
</section>
@endif
@if ($offer)
<section class="turnusy__offer mb-12 lg:mb-20">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      @if ($offer['title'])
      <div class="col-span-full w-full mb-2 text-center text-h3 font-primary" data-aos="fade-up">
        <h2>{!! $offer['title'] !!}</h2>
      </div>
      @endif
      @foreach ($offer['items'] as $itemoffer)
      @php
          $iconoffer = $itemoffer['icon'] ?? null;
          $titleoffer = $itemoffer['title'] ?? null;
          $contentoffer = $itemoffer['content'] ?? null;

      @endphp
      <div class="col-span-1 text-center" >
        <div class="h-full flex flex-col gap-4 p-2 pb-8 rounded-3xl transition-all duration-500 ease-in-out hover:shadow-cien-1">
            <div class="flex flex-col gap-2 items-center title justify-center py-2">
                @if ($iconoffer)
                <div class="icon" data-aos="fade-up">
                  <img src="{{ $iconoffer['url'] }}" alt="{{ $iconoffer['alt'] }}">
                </div>
                @endif
                @if ($titleoffer)
                <div class="text-h4 lg:text-h3 text-primary-500 font-primary" data-aos="fade-up">
                    <h3>{!! $titleoffer !!}</h3>
                </div>
                @endif
            </div>
            @if ($contentoffer)
            <div class="text-B16" data-aos="fade-up">
              {!! $contentoffer !!}
            </div>
            @endif
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
@endif
@if ($zabiegi)
<section class="turnusy__treatments bg-primary-10 relative py-12 lg:py-20">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      @if ($zabiegi['title'])
      <div class="col-span-full mb-2 text-h3 font-primary text-center" data-aos="fade-up">
        <h2>{!! $zabiegi['title'] !!}</h2>
      </div>
      @endif
      @foreach ($zabiegi['items'] as $itemzabieg)
      @php
          $imagezabieg = $itemzabieg['image'] ?? null;
          $titlezabieg = $itemzabieg['title'] ?? null;
          $contentzabieg = $itemzabieg['content'] ?? null;
      @endphp
      <div class="col-span-1 gap-4 flex flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2" data-aos="fade-up">
        @if ($imagezabieg)
        <div class="img lg:min-w-[164px] lg:h-[164px] min-w-[108px] h-[108px] grow-0 text-primary-300">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{ $imagezabieg['url'] }}" alt="{{ $imagezabieg['alt'] }}">
        </div>
        @endif
        <div class="text flex flex-col gap-2 justify-center">
          @if ($titlezabieg)
          <div class="text-h4 font-primary">
            <h3>{!! $titlezabieg !!}</h3>
          </div>
          @endif
          {!! $contentzabieg !!}
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

@if ($atrakcje)
<section class="turnusy__additional bg-white my-12 lg:my-20">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      @if ($atrakcje['title'])
      <div class="col-span-full mb-2 text-h3 font-primary text-center" data-aos="fade-up">
        <h2>{!! $atrakcje['title'] !!}</h2>
      </div>
      @endif
      @foreach ($atrakcje['items'] as $itematrakcje)
      @php
          $imageatrakcje = $itematrakcje['image'] ?? null;
          $titleatrakcje = $itematrakcje['title'] ?? null;
          $contentatrakcje = $itematrakcje['content'] ?? null;
      @endphp
      <div class="col-span-1 gap-4 flex flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2" data-aos="fade-up">
        @if ($imageatrakcje)
        <div class="img lg:min-w-[164px] lg:h-[164px] min-w-[108px] h-[108px] grow-0">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{ $imageatrakcje['url'] }}" alt="{{ $imageatrakcje['alt'] }}">
        </div>
        @endif
        <div class="text flex flex-col gap-2 justify-center">
          @if ($titleatrakcje)
          <div class="text-h4 font-primary">
            <h3>{!! $titleatrakcje !!}</h3>
          </div>
          @endif
          {!! $contentatrakcje !!}
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

@endsection
