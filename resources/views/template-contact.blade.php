{{--
  Template Name: Kontakt template
--}}


@extends('layouts.app')
@section('content')

@include('partials.hero' , ['class' => 'object-center max-3xl:object-top'])
<section class="kontakt__main">
  <div class="container">
    <div class="grid grid-cols-12 gap-6">
      <div class="col-span-4 flex justify-center flex-col">
        <a class="mb-8 block transition-all duration-500 ease-in-out hover:opacity-40" href="{{ home_url() }}">@svg('images.logo_black')</a>
        <div class="flex flex-col gap-4"> 
          <a class="item flex gap-4 items-center" href="">@svg('images.icons.marker')<span>Nieżywięć 145, 77-300 Nieżywięć</span></a>
          <p class="item flex gap-4 items-center" >@svg('images.icons.mobile')<span>Dostępny <strong>24h</strong>: +48 606 917 115</span></p>
          <p class="item flex gap-4 items-center" >@svg('images.icons.clock')<span><strong class="block">Recepcja:</strong>Poniedziałek- Niedziela: 7:00-22:00</span></p>
          <a class="item flex gap-4 items-center" href="mailto:recepcja@zielonewzgorza.com">@svg('images.icons.mail')<span>recepcja@zielonewzgorza.com</span></a>
          <div class="social-icons gap-4 flex items-center">
            <a target="_blank" rel="noopener" href="" class="icon">
                @svg('images.icons.fb_c')
            </a>
            <a target="_blank" rel="noopener" href="" class="icon">
              @svg('images.icons.fb_c')
            </a>
            <a target="_blank" rel="noopener" href="" class="icon">
              @svg('images.icons.fb_c')
            </a>
            <a target="_blank" rel="noopener" href="" class="icon">
              @svg('images.icons.fb_c')
            </a>
          </div>
        </div>
      </div>
      <div class="col-span-8 col-start-5 relative z-10">
        <div class="bg-white rounded-3xl shadow-cien-1 px-6 pt-8 pb-6">
            <div class="text-h4 lg:text-h3 font-primary mb-30 font-semibold">
                <h2>Zachęcamy do kontaktu</h2>
            </div>
            {!! do_shortcode('[contact-form-7 id="eee657f" title="Formularz 1"]') !!}
        </div>
      </div>
    </div>
  </div>
</section>
<div id="mapContact" class="w-full h-[500px] my-20"></div>

@endsection
