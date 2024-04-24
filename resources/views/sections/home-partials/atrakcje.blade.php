@php
$args = array(
  'post_type' => 'atrakcje',
  'posts_per_page' => -1,
//   'paged' => $paged
);
$query = new WP_Query( $args );

$data = get_field('attractions');
$title = $data['title'] ?? null;
$link = $data['link'] ?? null;
@endphp

@if ($query->have_posts())
<section class="home__atrakcje my-12 lg:my-72 relative ">
    <div class="container">
        @if ($title)
        <div class="w-full text-center text-h2 font-primary">
            <h2>{!! $title !!}</h2>
        </div>
        @endif
        <div class="swiper swiperAtrakcje max-w-full w-full py-8">
            <div class="swiper-wrapper">
                @while ($query->have_posts())
                    @php $query->the_post() @endphp
                        @include('partials.atrakcje-slide')
                @endwhile
                @php wp_reset_postdata() @endphp
            </div>
            <div class="swiper-pagination">

            </div>
        </div>
        @if ($link)
        <div class="col-span-full flex items-center justify-center">
            <div class="inline-flex">
                <a href="{{ $link['url'] }}" class="btn btn--primary btn--svg"><span>{{ $link['title'] }}</span> @svg('images.icons.arrow_white')</a>
            </div>
        </div>
        @endif
    </div>
</section>
@endif