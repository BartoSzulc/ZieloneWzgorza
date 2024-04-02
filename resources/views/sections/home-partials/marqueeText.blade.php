@php
  $text = $data['text'] ?? null;
@endphp

<section class="marquee" @if ($id) id="{{ $id }}" @endif>
    <div class="marquee__inner" aria-hidden="true" ref="inner">
      @for ($i = 0; $i < 8; $i++)
      <div class="marquee__part">
       <span>{!! $text !!}</span>
      </div>
      @endfor
      </div>
    </div>
</section>