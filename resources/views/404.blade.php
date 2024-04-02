@extends('layouts.app')

@section('content')
<section class="hero__template  text-white bg-black80 relative pt-40 py-full overflow-hidden wysiwyg">
  <div class="container">
      <div class="w-full mb-half-mobile lg:mb-half">
          <div class="text-h3 lg:text-h2 font-bold font-secondary text-center">
            <h1 class="sr-only">404</h1>
          </div>
      </div>
      <div class="bg-black80 p-half-mobile lg:p-half max-lg:w-[calc(100%+40px)] max-lg:-left-5 relative rounded">
       <div class="flex flex-wrap gap-5 items-center justify-center w-full flex-col" >
        <div class="text-h3 lg:text-h3 text-center" >
          <h2>{{ pll__('Strona nie istnieje') }}</h2>
        </div>
        <a href="/" class="btn btn--primary" ><span>{{ pll__('Powrót') }}</span></a>
       </div>
      </div>
     
  </div>
</section>
@endsection
