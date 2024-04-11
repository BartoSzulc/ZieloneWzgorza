<section class="home__apartments my-72">
    <div class="container">
        <div class="w-full text-center text-h3 lg:text-h2 font-primary">
            <h2>Pokoje i apartamenty</h2>
        </div>
        <div class="swiper swiperApartments max-w-full w-full py-8">
            <div class="swiper-wrapper">
                @include('partials.apartments-slide')
                @include('partials.apartments-slide')
                @include('partials.apartments-slide')
                @include('partials.apartments-slide')

                
            </div>
            <div class="swiper-pagination">

            </div>
        </div>
        
        <div class="col-span-full flex items-center justify-center">
            <div class="inline-flex">
                <a href="" class="btn btn--primary btn--svg"><span>Szukam noclegu</span> @svg('images.icons.bed')</a>
            </div>
        </div>
        
    </div>
</section>