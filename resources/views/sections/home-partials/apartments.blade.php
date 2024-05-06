@php

    $data = get_field('apartments');
    $title = $data['title'] ?? null;
    $link = $data['link'] ?? null;

    $args = array(
    'post_type' => 'pokoje',
    'posts_per_page' => -1,
    //   'paged' => $paged
    );
    $query = new WP_Query( $args );

@endphp

<section class="home__apartments my-12 lg:my-72">
    <div class="container">
        @if ($title)
        <div class="w-full text-center text-h2 font-primary" data-aos="fade-up">
            <h2>{!! $title !!}</h2>
        </div>
        @endif
        @if ($query->have_posts())
        <div class="swiper swiperApartments max-w-full w-full py-12 lg:py-8">
            <div class="swiper-wrapper">
                @while ($query->have_posts())
                @php $query->the_post() @endphp
                    @include('partials.apartments-slide')
                @endwhile 
                @php wp_reset_postdata() @endphp
            </div>
            <div class="swiper-pagination">

            </div>
        </div>
        @endif
        @if ($link)
        <div class="col-span-full flex items-center justify-center" data-aos="fade-up">
            <div class="inline-flex">
                <a href="{{ $link['url'] }}" class="btn btn--primary btn--svg"><span>{{ $link['title'] }}</span> @svg('images.icons.bed')</a>
            </div>
        </div>
        @endif
    </div>
</section>