@php
    
   $title = $data['title'] ?? null;
   $casestudies = $data['casestudies'] ?? null;
@endphp
<section class="home__case-study pb-11 lg:pb-[70px]" @if ($id) id="{{ $id }}" @endif>
    <div class="container">
      @if ($title)
       <div class="text-h3 lg:text-h2 font-secondary text-primary100 lg:mb-[70px] mb-6 text-center">
          <h2>Case Study</h2>
       </div>
      @endif
      @if ($casestudies)
       <div class="swiperCaseStudy swiper">
         <div class="right-0 lg:top-11 flex items-end gap-8 caseSwiper__nav lg:absolute z-10 relative max-lg:mb-6">

            <div class="caseSwiper__nav--prev">
               @include('partials.swiper-button')
            </div>
            <div class="caseSwiper__nav--next">
               @include('partials.swiper-button', ['class' => 'rotate-180'])
            </div>
            
         </div>
         <div class="swiper-wrapper relative">
            @foreach ($casestudies as $casestudy)
            @php 
               $logo = $casestudy['logo'] ?? null;
               $heading = $casestudy['heading'] ?? null;
               $subheading = $casestudy['subheading'] ?? null;
               $timeline = $casestudy['timeline'] ?? null;
            @endphp
               @include('partials.swiper-slide-case-study')
            @endforeach
         </div>
       </div>
      @endif
    </div>
 </section>


 
