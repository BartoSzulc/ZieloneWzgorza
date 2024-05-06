<div class="swiper-slide bg-white rounded-2xl py-8 lg:py-16 px-6 flex flex-col items-center justify-center gap-30 shadow-cien-1 text-center">
    <div class="stars flex items-center gap-1" data-aos="fade-up">
        @svg('images.icons.star')
        @svg('images.icons.star')
        @svg('images.icons.star')
        @svg('images.icons.star')
        @svg('images.icons.star')
    </div>
    @if ($content)
    <div class="text italic text-BQuote" data-aos="fade-up">
        {!! $content !!}
    </div>
    @endif
    @if ($name)
    <div class="name text-B20 font-bold" data-aos="fade-up">
        <p>{!! $name !!}</p>
    </div>
    @endif
</div>