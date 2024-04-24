{{--
  Template Name: Turnusy template
--}}


@extends('layouts.app')
@section('content')

@include('partials.hero' , ['class' => 'object-center max-3xl:object-bottom blur-[3px]'])

@php
    $intro = get_field('intro');
    $intro_sec = get_field('intro_sec');
    $content = $intro_sec['content'] ?? null;
    $zabiegi = get_field('zabiegi');
    $atrakcje = get_field('dodatkowe_atrakcje');
@endphp

@if ($intro['content'])
<section class="turnusy__intro">
  <div class="container">
    <div class="grid grid-cols-12 gap-6">
      <div class="col-span-full lg:col-span-10 lg:col-start-2 text-center">
        {!! $intro['content'] !!}
      </div>
    </div>
  </div>
</section>
@endif

<section class="turnusy__intro-sec lg:my-20">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <div class="col-span-1 flex flex-col gap-4 pt-[18px]">
        <div class="text-h2 font-primary text-primary-500">
          <h2>Regeneracja
            <span class="text-primary-300 block">i Odpoczynek</span>
            <span class="text-h3 text-texter block tracking-[0px]">w Harmonii z Naturą</span>
          </h2>
        </div>
        
        <p>Nasze turnusy rehabilitacyjne w "Zielonych Wzgórzach" to unikalna propozycja dla każdego, kto szuka efektywnego sposobu na regenerację ciała i ducha. Oferujemy kompleksowy program pobytu, który łączy w sobie profesjonalne zabiegi rehabilitacyjne z aktywnym wypoczynkiem i relaksem w sercu natury.</p>
      </div>
      <div class="col-span-1">
        <div class="img">
          <img class="rounded-2xl" src="{{asset('images/turny_intro-img.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="turnusy__offer mb-20">
  <div class="container">
    <div class="grid grid-cols-3 gap-6">
      <div class="col-span-full w-full mb-2 text-center text-h3 font-primary">
        <h2>W ramach pobytu oferujemy</h2>
      </div>
      <div class="col-span-1 text-center">
        <div class="h-full flex flex-col gap-4 p-2 pb-8 rounded-3xl transition-all duration-500 ease-in-out hover:shadow-cien-1">
            <div class="flex flex-col gap-2 items-center title justify-center py-2">
                <div class="icon">
                    @svg('images.icons.fizjo_icon')
                </div>
                <div class="text-h4 lg:text-h3 text-primary-500 font-primary">
                    <h3>Noclegi</h3>
                </div>
            </div>
            <div class="text-B16">
               <p> 7 lub 14 noclegów w komfortowych pokojach i apartamentach, zaprojektowanych z myślą o Twoim pełnym komforcie i regeneracji.</p>
            </div>
        </div>
      </div>
      <div class="col-span-1 text-center">
        <div class="h-full flex flex-col gap-4 p-2 pb-8 rounded-3xl transition-all duration-500 ease-in-out hover:shadow-cien-1">
            <div class="flex flex-col gap-2 items-center title justify-center py-2">
                <div class="icon">
                    @svg('images.icons.fizjo_icon')
                </div>
                <div class="text-h4 lg:text-h3 text-primary-500 font-primary">
                    <h3>Wyżywienie</h3>
                </div>
            </div>
            <div class="text-B16">
               <p> 3 posiłki dziennie w formie bufetu szwedzkiego, przygotowane z myślą o zdrowym odżywianiu i wsparciu procesów regeneracyjnych organizmu.</p>
            </div>
        </div>
      </div>
      <div class="col-span-1 text-center">
        <div class="h-full flex flex-col gap-4 p-2 pb-8 rounded-3xl transition-all duration-500 ease-in-out hover:shadow-cien-1">
            <div class="flex flex-col gap-2 items-center title justify-center py-2">
                <div class="icon">
                    @svg('images.icons.fizjo_icon')
                </div>
                <div class="text-h4 lg:text-h3 text-primary-500 font-primary">
                    <h3>Turnusy rehabilitacyjne</h3>
                </div>
            </div>
            <div class="text-B16">
               <p> Indywidualnie dobierane programy zabiegów, realizowane pod okiem doświadczonych specjalistów. </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="turnusy__treatments bg-primary-10 relative py-20">
  <div class="container">
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-full mb-2 text-h3 font-primary text-center">
        <h2>Nasze zabiegi</h2>
      </div>
      <div class="col-span-1 gap-4 flex flex-wrap lg:flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2">
        <div class="img min-w-[164px] h-[164px]">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{asset('images/service_1.png')}}" alt="">
        </div>
        <div class="text flex flex-col gap-2 justify-center">
          <div class="text-h4 font-primary">
            <h3>Ultradźwięki</h3>
          </div>
          <p>Wykorzystanie fal dźwiękowych do mikromasażu tkankowego, poprawy metabolizmu komórkowego i właściwości przeciwzapalnych.</p>
        </div>
      </div>
      <div class="col-span-1 gap-4 flex flex-wrap lg:flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2">
        <div class="img min-w-[164px] h-[164px]">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{asset('images/service_1.png')}}" alt="">
        </div>
        <div class="text flex flex-col gap-2 justify-center">
          <div class="text-h4 font-primary">
            <h3>Krioterapia</h3>
          </div>
          <p>Zabieg zimnoleczniczy, który poprawia ukrwienie, metabolizm i przyspiesza procesy regeneracyjne.</p>
        </div>
      </div>
      <div class="col-span-1 gap-4 flex flex-wrap lg:flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2">
        <div class="img min-w-[164px] h-[164px]">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{asset('images/service_1.png')}}" alt="">
        </div>
        <div class="text flex flex-col gap-2 justify-center">
          <div class="text-h4 font-primary">
            <h3>Ultradźwięki</h3>
          </div>
          <p>Wykorzystanie fal dźwiękowych do mikromasażu tkankowego, poprawy metabolizmu komórkowego i właściwości przeciwzapalnych.</p>
        </div>
      </div>
      <div class="col-span-1 gap-4 flex flex-wrap lg:flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2">
        <div class="img min-w-[164px] h-[164px]">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{asset('images/service_1.png')}}" alt="">
        </div>
        <div class="text flex flex-col gap-2 justify-center">
          <div class="text-h4 font-primary">
            <h3>Ultradźwięki</h3>
          </div>
          <p>Wykorzystanie fal dźwiękowych do mikromasażu tkankowego, poprawy metabolizmu komórkowego i właściwości przeciwzapalnych.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="turnusy__additional bg-white my-20">
  <div class="container">
    <div class="grid grid-cols-2 gap-6">
      <div class="col-span-full mb-2 text-h3 font-primary text-center">
        <h2>Dodatkowe atrakcje</h2>
      </div>
      <div class="col-span-1 gap-4 flex flex-wrap lg:flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2">
        <div class="img min-w-[164px] h-[164px]">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{asset('images/service_1.png')}}" alt="">
        </div>
        <div class="text flex flex-col gap-2 justify-center">
          <div class="text-h4 font-primary">
            <h3>Ultradźwięki</h3>
          </div>
          <p>Wykorzystanie fal dźwiękowych do mikromasażu tkankowego, poprawy metabolizmu komórkowego i właściwości przeciwzapalnych.</p>
        </div>
      </div>
      <div class="col-span-1 gap-4 flex flex-wrap lg:flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2">
        <div class="img min-w-[164px] h-[164px]">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{asset('images/service_1.png')}}" alt="">
        </div>
        <div class="text flex flex-col gap-2 justify-center">
          <div class="text-h4 font-primary">
            <h3>Ultradźwięki</h3>
          </div>
          <p>Wykorzystanie fal dźwiękowych do mikromasażu tkankowego, poprawy metabolizmu komórkowego i właściwości przeciwzapalnych.</p>
        </div>
      </div>
      <div class="col-span-1 gap-4 flex flex-wrap lg:flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2">
        <div class="img min-w-[164px] h-[164px]">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{asset('images/service_1.png')}}" alt="">
        </div>
        <div class="text flex flex-col gap-2 justify-center">
          <div class="text-h4 font-primary">
            <h3>Ultradźwięki</h3>
          </div>
          <p>Wykorzystanie fal dźwiękowych do mikromasażu tkankowego, poprawy metabolizmu komórkowego i właściwości przeciwzapalnych.</p>
        </div>
      </div>
      <div class="col-span-1 gap-4 flex flex-wrap lg:flex-nowrap bg-white rounded-3xl shadow-cien-1 py-4 px-2">
        <div class="img min-w-[164px] h-[164px]">
          <img class="w-full h-full object-cover object-center rounded-2xl" src="{{asset('images/service_1.png')}}" alt="">
        </div>
        <div class="text flex flex-col gap-2 justify-center">
          <div class="text-h4 font-primary">
            <h3>Ultradźwięki</h3>
          </div>
          <p>Wykorzystanie fal dźwiękowych do mikromasażu tkankowego, poprawy metabolizmu komórkowego i właściwości przeciwzapalnych.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
