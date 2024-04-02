@php

$title = $data['title'] ?? null;
$logos = $data['logos'] ?? null;

@endphp
<section class="home__trustedme py-half lg:py-full overflow-hidden" @if ($id) id="{{ $id }}" @endif>
    <div class="container">
      @if ($title)
       <div class="w-full text-center text-h3 lg:text-h2 font-secondary text-primary100">
          <h2>{!! $title !!}</h2>
       </div>
      @endif
    </div>
    @if ($logos)
    <div class="px-5 lg:px-6 cards-container gap-6 logo:items-center logo:justify-center max-logo:w-fit max-lg:w-full grid max-lg:grid-cols-6 lg:grid-cols-logo lg:mt-[86px] mt-16">
      @foreach ($logos as $logo)
      @php($image = $logo['logo'] ?? null)
      @if ($image)
       <div class="card w-full lg:h-[264px] rounded-2xl max-lg:col-span-3 max-lg:flex max-lg:items-center max-lg:justify-center">
          {!! wp_get_attachment_image($image, 'full', false, ['class' => 'rounded-2xl']) !!}
       </div>
      @endif
      @endforeach
    </div>
    @endif
 </section>
