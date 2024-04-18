@php
$gallery = get_field('gallery');

@endphp
<div class="grid grid-cols-12 my-10">
    @title
    @if ($gallery)
    <div class="col-span-12 lg:col-span-6">
        @foreach ($gallery as $image)
            {!! wp_get_attachment_image($image, 'full', false, ['class' => 'object-cover object-center w-20']) !!}
        @endforeach
        {{-- <div class="swiper swiperPokoje">
            <div class="swiper-wrapper">
                
            </div>
            <div class="swiper-pagination"></div>
        </div> --}}
    </div>
@endif
</div>