{{--
  Template Name: Cennik template
--}}


@extends('layouts.app')
@section('content')

@include('partials.hero' , ['class' => 'object-center max-3xl:object-top blur-[3px]'])
<section class="cennik__add my-20">
  <div class="container">
    
    <div class="flex flex-col gap-4 mb-20">
      <div class="w-full text-center text-h2 font-primary">
        <h2>Fizjoterapia</h2>
      </div>
      <div class="normal-price flex items-center justify-between gap-12 p-4">
        <div class="left flex flex-col gap-1">
          <div class="text-h5 font-primary">
            <h2>Krioterapia</h2>
          </div>
          <div class="text-B12">
            <p>procedura wykorzystująca niskie temperatury do leczenia różnych schorzeń poprzez zastosowanie zimna.</p>
          </div>
        </div>
        <div class="right price">
          <strong class="text-B20">15,00</strong>
          <span class="text-B12">zł</span>
        </div>
      </div>
      <div class="normal-price flex items-center justify-between gap-12 p-4">
        <div class="left flex flex-col gap-1">
          <div class="text-h5 font-primary">
            <h2>Krioterapia</h2>
          </div>
          <div class="text-B12">
            <p>procedura wykorzystująca niskie temperatury do leczenia różnych schorzeń poprzez zastosowanie zimna.</p>
          </div>
        </div>
        <div class="right price">
          <strong class="text-B20">15,00</strong>
          <span class="text-B12">zł</span>
        </div>
      </div>
      <div class="normal-price flex items-center justify-between gap-12 p-4">
        <div class="left flex flex-col gap-1">
          <div class="text-h5 font-primary">
            <h2>Krioterapia</h2>
          </div>
          <div class="text-B12">
            <p>procedura wykorzystująca niskie temperatury do leczenia różnych schorzeń poprzez zastosowanie zimna.</p>
          </div>
        </div>
        <div class="right price">
          <strong class="text-B20">15,00</strong>
          <span class="text-B12">zł</span>
        </div>
      </div>
      

      <div class="accordion-container accordion-price">
        <div class="ac group rounded-b-2xl transition-all duration-500 ease-in-out;">
          <h2 class="ac-header ">
            <div class="ac-trigger flex gap-12 grow items-center bg-white m-0 p-4 relative transition-all duration-500 ease-in-out rounded-t-2xl  group-[.is-active]:bg-primary-10 ">
            <div class="flex flex-col gap-1 text-left ">
              <div class="transition-all duration-500 ease-in-out text-h5 font-primary group-hover:text-primary-500 group-[.is-active]:text-primary-500">
                <h3>Elektroterapia</h3>
              </div>
              <div class="text-B12">
                <p><span>metoda terapeutyczna polegająca na stosowaniu prądu elektrycznego w celu leczenia różnych schorzeń, poprawy funkcji mięśniowych, zmniejszenia bólu oraz przyspieszenia procesu gojenia się tkanek.</span></p>
              </div>
            </div>
            <span class="transition-all duration-500 ease-in-out group-[.is-active]:-rotate-180 ml-auto">
              <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="transition-all duration-500 ease-in-out group-hover:fill-primary-500" opacity="0.2" d="M19.5 9.5L12 17L4.5 9.5H19.5Z" fill="#6E8C03" fill-opacity="0.2"/>
                <path class="transition-all duration-500 ease-in-out group-hover:fill-primary-500 group-hover:stroke-primary-500 group-hover:[stroke-opacity:1]  group-[.is-active]:fill-primary-500 group-[.is-active]:stroke-primary-500 group-[.is-active]:[stroke-opacity:1]" d="M19.5 9.5L12 17L4.5 9.5H19.5Z" fill="#323232" fill-opacity="0.2" stroke="#333333" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            </div>
          </h2>
          <div class="ac-panel px-4 overflow-hidden transition-accordion motion-reduce:transition-none ease bg-white rounded-b-2xl">
            <div class="flex items-center justify-between py-3">
              <div class="left text-B20">
                <p>Jonoforeza</p>
              </div>
              <div class="right price">
                <strong class="text-B20">15,00</strong>
                <span class="text-B12">zł</span>
              </div>
            </div>
            <div class="flex items-center justify-between py-3">
              <div class="left text-B20">
                <p>Jonoforeza</p>
              </div>
              <div class="right price">
                <strong class="text-B20">15,00</strong>
                <span class="text-B12">zł</span>
              </div>
            </div>
            <div class="flex items-center justify-between py-3">
              <div class="left text-B20">
                <p>Jonoforeza</p>
              </div>
              <div class="right price">
                <strong class="text-B20">15,00</strong>
                <span class="text-B12">zł</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col gap-4 mb-20">
      <div class="w-full text-center text-h2 font-primary">
        <h2>Fizjoterapia</h2>
      </div>
      <div class="normal-price flex items-center justify-between gap-12 p-4">
        <div class="left flex flex-col gap-1">
          <div class="text-h5 font-primary">
            <h2>Krioterapia</h2>
          </div>
          <div class="text-B12">
            <p>procedura wykorzystująca niskie temperatury do leczenia różnych schorzeń poprzez zastosowanie zimna.</p>
          </div>
        </div>
        <div class="right price">
          <strong class="text-B20">15,00</strong>
          <span class="text-B12">zł</span>
        </div>
      </div>
      <div class="normal-price flex items-center justify-between gap-12 p-4">
        <div class="left flex flex-col gap-1">
          <div class="text-h5 font-primary">
            <h2>Krioterapia</h2>
          </div>
          <div class="text-B12">
            <p>procedura wykorzystująca niskie temperatury do leczenia różnych schorzeń poprzez zastosowanie zimna.</p>
          </div>
        </div>
        <div class="right price">
          <strong class="text-B20">15,00</strong>
          <span class="text-B12">zł</span>
        </div>
      </div>
      <div class="normal-price flex items-center justify-between gap-12 p-4">
        <div class="left flex flex-col gap-1">
          <div class="text-h5 font-primary">
            <h2>Krioterapia</h2>
          </div>
          <div class="text-B12">
            <p>procedura wykorzystująca niskie temperatury do leczenia różnych schorzeń poprzez zastosowanie zimna.</p>
          </div>
        </div>
        <div class="right price">
          <strong class="text-B20">15,00</strong>
          <span class="text-B12">zł</span>
        </div>
      </div>
      

      <div class="accordion-container accordion-price">
        <div class="ac group rounded-b-2xl transition-all duration-500 ease-in-out;">
          <h2 class="ac-header ">
            <div class="ac-trigger flex gap-12 grow items-center bg-white m-0 p-4 relative transition-all duration-500 ease-in-out rounded-t-2xl  group-[.is-active]:bg-primary-10 ">
            <div class="flex flex-col gap-1 text-left ">
              <div class="transition-all duration-500 ease-in-out text-h5 font-primary group-hover:text-primary-500 group-[.is-active]:text-primary-500">
                <h3>Elektroterapia</h3>
              </div>
              <div class="text-B12">
                <p><span>metoda terapeutyczna polegająca na stosowaniu prądu elektrycznego w celu leczenia różnych schorzeń, poprawy funkcji mięśniowych, zmniejszenia bólu oraz przyspieszenia procesu gojenia się tkanek.</span></p>
              </div>
            </div>
            <span class="transition-all duration-500 ease-in-out group-[.is-active]:-rotate-180 ml-auto">
              <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="transition-all duration-500 ease-in-out group-hover:fill-primary-500" opacity="0.2" d="M19.5 9.5L12 17L4.5 9.5H19.5Z" fill="#6E8C03" fill-opacity="0.2"/>
                <path class="transition-all duration-500 ease-in-out group-hover:fill-primary-500 group-hover:stroke-primary-500 group-hover:[stroke-opacity:1]  group-[.is-active]:fill-primary-500 group-[.is-active]:stroke-primary-500 group-[.is-active]:[stroke-opacity:1]" d="M19.5 9.5L12 17L4.5 9.5H19.5Z" fill="#323232" fill-opacity="0.2" stroke="#333333" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            </div>
          </h2>
          <div class="ac-panel px-4 overflow-hidden transition-accordion motion-reduce:transition-none ease bg-white rounded-b-2xl">
            <div class="flex items-center justify-between py-3">
              <div class="left text-B20">
                <p>Jonoforeza</p>
              </div>
              <div class="right price">
                <strong class="text-B20">15,00</strong>
                <span class="text-B12">zł</span>
              </div>
            </div>
            <div class="flex items-center justify-between py-3">
              <div class="left text-B20">
                <p>Jonoforeza</p>
              </div>
              <div class="right price">
                <strong class="text-B20">15,00</strong>
                <span class="text-B12">zł</span>
              </div>
            </div>
            <div class="flex items-center justify-between py-3">
              <div class="left text-B20">
                <p>Jonoforeza</p>
              </div>
              <div class="right price">
                <strong class="text-B20">15,00</strong>
                <span class="text-B12">zł</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
