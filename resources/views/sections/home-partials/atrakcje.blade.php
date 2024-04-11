<section class="home__atrakcje my-72 relative">
    <div class="container">
        <div class="w-full text-center text-h3 lg:text-h2 font-primary">
            <h2>Atrakcje w okolicy</h2>
        </div>
        <div class="swiper swiperAtrakcje max-w-full w-full py-8">
            <div class="swiper-wrapper">
                @include('partials.atrakcje-slide')
                @include('partials.atrakcje-slide')
                @include('partials.atrakcje-slide')
                @include('partials.atrakcje-slide')
            </div>
            <div class="swiper-pagination">

            </div>
        </div>
        <div class="col-span-full flex items-center justify-center">
            <div class="inline-flex">
                <a href="" class="btn btn--primary btn--svg"><span>Ciekawe miejsca</span> @svg('images.icons.arrow_white')</a>
            </div>
        </div>
    </div>
</section>