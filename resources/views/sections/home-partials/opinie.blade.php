<section class="home__opinie my-72 relative">
    <div class="container">
        <div class="w-full text-center text-h3 lg:text-h2 font-primary">
            <h2>Opinie</h2>
        </div>
    </div>
    <div class="swiper swiperTestimonials max-w-full w-full pt-8 pb-16">
        <div class="swiper-wrapper">
            @include('partials.testimonial-slide')
            @include('partials.testimonial-slide')
            @include('partials.testimonial-slide')
            @include('partials.testimonial-slide')
          
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
</section>