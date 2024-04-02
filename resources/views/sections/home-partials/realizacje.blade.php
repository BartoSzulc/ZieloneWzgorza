@php
   $title = $data['title'] ?? null;
   $addline = $data['addline'] ?? null;
@endphp
<section class="home__realizacje py-[140px] lg:py-[74px]" @if ($id) id="{{ $id }}" @endif>
    <div class="container">
      @if ($title)
       <div class="text-h3 lg:text-h2 font-secondary text-primary100 mb-6 lg:mb-9 text-center">
          <h2>{!! $title !!}</h2>
       </div>
      @endif
    </div>
@if ($addline)
<div class="marquee-image__wrapper flex flex-col gap-6 overflow-hidden">
   @php $count = 1; @endphp
   @foreach ($addline as $item)
   @php
      $realizations = $item['realizations'] ?? null;
   @endphp
    <div class="marquee-image__inner @if ($count % 2) toleft @else toright @endif">
      @if ($realizations)
      @for ($j = 0; $j < 2; $j++)
      @foreach ($realizations as $realization)
            @php
                  $image = $realization['image'] ?? null;
            @endphp
            <div class="marquee-image__part">
                  {!! wp_get_attachment_image($image, 'full', false, ['class' => 'aspect-[160/134] lg:aspect-[360/302] object-cover rounded-2xl', 'loading' => 'lazy']) !!}
            </div>
         @endforeach
      @endfor
      @endif
    </div>
    @php $count++; @endphp
    @endforeach
 </div>
@endif
</section>
