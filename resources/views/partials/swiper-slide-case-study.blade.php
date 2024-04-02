
<div class="swiper-slide">
    <div class="w-full title grid grid-cols-12 gap-6 pb-6 lg:pb-8 relative">
       <div class="col-span-full lg:col-span-9 lg:grid lg:grid-cols-9 gap-6 title-inside -z-10 max-lg:flex-col max-lg:flex">
         @if ($logo)
          <div class="col-span-1 flex lg:items-center lg:justify-center max-lg:justify-start">
            {!! wp_get_attachment_image($logo, 'full', false, array('class' => 'rounded-2xl lg:w-[72px] lg:h-[72px] h-[103px] w-[103px] object-contain object-center shadow-cien-1', 'loading' => 'lazy')); !!}          
         </div>
          @endif
          <div class="col-span-8 flex flex-col gap-2">
            @if ($heading)
             <div class="text-h4 max-lg:text-h3 font-secondary text-white">
                <h3>{!! $heading !!}</h3>
             </div>
            @endif
            @if ($subheading)
             <div class="text-h5 max-lg:text-h4 font-secondary text-black10">
                <h4>{!! $subheading !!} </h4>
             </div>
            @endif
          </div>
       </div>
       <div class="absolute h-0.5 bg-black60 w-full bottom-0 -left-0 -z-10"></div>
    </div>
    @if ($timeline)
    <div class="max-lg:gap-6 flex max-lg:flex-col items-center justify-between calculateHeight lg:px-8 relative z-10 bg-black80 lg:mt-4 mt-6">
      <div class="absolute h-full w-0.5 lg:h-0.5 bg-black60 lg:w-full lg:-translate-y-1/2 lg:-left-0 -z-10 max-lg:left-[18px] max-lg:top-0"></div>
      @php $counter = 1; @endphp
      @foreach ($timeline as $item)

      @php 
      $classString = '';
      $image = $item['image'] ?? null;
      $content = $item['content'] ?? null;

      @endphp
      @switch($counter)
         @case(1)
            @php $classString = 'lg:-left-8 lg:-translate-y-[calc(100%+44px)] lg:w-[300px] xl:w-[344px] text-left'; @endphp
            @break
         @case(2)
            @php $classString = 'lg:left-1/2 lg:-translate-x-1/2 lg:top-[calc(100%+34px)] lg:w-[250px] xl:w-[300px] lg:text-center'; @endphp
            @break
         @case(3)
            @php $classString = 'lg:left-1/2 lg:-translate-x-1/2 lg:-translate-y-[calc(100%+44px)]  lg:w-[300px] xl:w-[344px] lg:text-center'; @endphp
            @break
         @case(4)
            @php $classString = 'lg:left-1/2 lg:-translate-x-1/2 lg:top-[calc(100%+34px)]  lg:w-[250px] xl:w-[300px] lg:text-center'; @endphp
            @break
         @case(5)
            @php $classString = 'lg:left-1/2 lg:-translate-x-1/2 lg:-translate-y-[calc(100%+44px)]  lg:w-[230px] xl:w-[262px] lg:text-center'; @endphp
            @break
         @case(6)
            @php $classString = 'lg:-right-8 lg:top-[calc(100%+34px)] lg:w-[220px] xl:w-[225px] lg:text-right'; @endphp
            @break
         @default
            @php $classString = 'lg:w-[250px] xl:w-[300px] lg:text-center'; @endphp
       @endswitch
       <div class="max-lg:w-full icon relative z-10 max-lg:flex max-lg:items-center max-lg:gap-4">
         @if ($content)
          <div class="max-lg:order-last text z-10 lg:absolute text-black10 text-case-study {{ $classString }}">
            {!! $content !!}
          </div>
         @endif
         @if ($image)
          <img src="{{ $image['url'] }}" class="shrink-0" alt="">
         @endif
       </div>
       @php $counter++; @endphp
       @endforeach
    </div>
   @endif
 </div>