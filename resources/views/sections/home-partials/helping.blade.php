@php

   $title = $data['title'] ?? null;
   $content = $data['content'] ?? null;
   $content2 = $data['content2'] ?? null;
   
@endphp

<section class="home__helping py-20 lg:py-11" @if ($id) id="{{ $id }}" @endif>
    <div class="container flex flex-col gap-8 items-center text-center justify-center">
      @if ($title)
      <div class="text-h3 font-secondary text-primary100">
         <h2>{!! $title !!}</h2>
      </div>
      @endif
      @if ($content)
      <div class="text-B24 text-black10">
         {!! $content !!}
      </div>
      @endif
      @if ($content2)
      <div class="text-B24 text-primary100">
         {!! $content2 !!}
      </div>
      @endif
   </div>
</section>