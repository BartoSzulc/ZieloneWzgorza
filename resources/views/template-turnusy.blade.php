{{--
  Template Name: Turnusy template
--}}


@extends('layouts.app')
@section('content')

@include('partials.hero' , ['class' => 'object-center max-3xl:object-bottom blur-[3px]'])

<section class="turnusy__intro">
  <div class="container">
    <div class="grid grid-cols-12 gap-6">
      <div class="col-span-full lg:col-span-10 col-start-2 text-center">
        <p>Zapraszamy na turnusy rehabilitacyjne z pełnym pakietem usług: od 7 do 14 noclegów, 3 posiłki dziennie, zabiegi rehabilitacyjne, a także liczne aktywności zwiększające efektywność kuracji.</p>
      </div>
    </div>
  </div>
</section>
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
      <div class="col-span-1">
        
      </div>
    </div>
  </div>
</section>
@endsection
