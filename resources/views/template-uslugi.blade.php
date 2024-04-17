{{--
  Template Name: Usługi template
--}}


@extends('layouts.app')
@section('content')
@include('partials.hero', ['class' => 'object-center blur-[3px]'])
<section class="services__intro">
  <div class="container">
    <div class="grid grid-cols-12 gap-6">
      <div class="col-span-full lg:col-span-10 col-start-2 text-center">
        <p>Indywidualnie dobierane programy zabiegów, realizowane pod okiem doświadczonych specjalistów. Szczegółowe informacje o zabiegach znajdziesz poniżej.</p>
      </div>
    </div>
  </div>
</section>
<section class="services__services my-[72px]">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-6 gap-6 lg:gap-y-12">
      <div class="col-span-1">
        <div class="flex max-lg:flex-wrap justify-center lg:justify-end items-center relative min-h-[264px]">
          <div class="img relative lg:absolute left-0 lg:top-1/2 lg:-translate-y-1/2 ">
            <img class="max-w-[264px] rounded-3xl relative z-[5] shadow-cien-1" src="{{asset('images/service_1.png')}}" alt="">
          </div>
          <div class="max-lg:-mt-6 text w-full lg:w-[calc((360/552)*100%)] rounded-2xl bg-white flex flex-col gap-3 relative z-10 shadow-cien-1 p-6 ">
            <div class="title text-primary-500">
              <div class="text-h4 font-primary">
                <h2>Eletroterapia</h2>
              </div>
              <div class="undertitle text-B12">
                <span>(w tym TENS, Galwanizacja, Jonoforeza)</span>
              </div>
            </div>
            <div class="desc">
              <p>Zabieg polegający na miejscowym obniżeniu temperatury tkanek, co przyspiesza procesy regeneracyjne, zmniejsza obrzęki oraz ma działanie przeciwbólowe.</p>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-span-1">
        <div class="flex max-lg:flex-wrap justify-center lg:justify-end items-center relative min-h-[264px]">
          <div class="img relative lg:absolute left-0 lg:top-1/2 lg:-translate-y-1/2 ">
            <img class="max-w-[264px] rounded-3xl relative z-[5] shadow-cien-1" src="{{asset('images/service_1.png')}}" alt="">
          </div>
          <div class="max-lg:-mt-6 text w-full lg:w-[calc((360/552)*100%)] rounded-2xl bg-white flex flex-col gap-3 relative z-10 shadow-cien-1 p-6 ">
            <div class="title text-primary-500">
              <div class="text-h4 font-primary">
                <h2>Eletroterapia</h2>
              </div>
              <div class="undertitle text-B12">
                <span>(w tym TENS, Galwanizacja, Jonoforeza)</span>
              </div>
            </div>
            <div class="desc">
              <p>Zabieg polegający na miejscowym obniżeniu temperatury tkanek, co przyspiesza procesy regeneracyjne, zmniejsza obrzęki oraz ma działanie przeciwbólowe.</p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('partials.cta')
@endsection

