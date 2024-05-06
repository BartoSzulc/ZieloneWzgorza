@php
    
    $data = get_field('testimonials');

    $title = $data['title'] ?? null;
    $items = $data['items'] ?? null;
@endphp

@if ($data)
<section class="home__opinie my-12 lg:my-72 relative ">
    <div class="container">
        @if ($title)
        <div class="w-full text-center text-h2 font-primary" data-aos="fade-up">
            <h2>{!! $title !!}</h2>
        </div>
        @endif
    </div>
    @if ($items)
    <div class="swiper swiperTestimonials max-w-full w-full pt-8 pb-0 lg:pb-16 max-lg:px-[15px]">
        <div class="swiper-wrapper">
            @foreach ($items as $item)
            @php
                $name = $item['name'] ?? null;
                $content = $item['content'] ?? null;
            @endphp
                @include('partials.testimonial-slide')
            @endforeach
        </div>
        <div class="swiperTestimonials__nav flex gap-4 items-center justify-center mt-8">
            <div class="swiperTestimonials__nav--prev">
                @include('partials.swiper-button', ['class' => 'prev'])
            </div>
            <div class="swiper-pagination">
            </div>
            <div class="swiperTestimonials__nav--next">
                @include('partials.swiper-button', ['class' => 'rotate-180 next'])
            </div>
        </div>
    </div>
    @endif
</section>
@endif