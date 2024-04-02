@php
    $title = $data['title'] ?? null;
    $testimonials = $data['testimonials'] ?? null;
@endphp

<section class="home__testimonials lg:pt-[62px] lg:pb-7 overflow-hidden" @if ($id) id="{{ $id }}" @endif>
    <div class="container">
        <div class="w-full">
            @if ($title)
            <div class="text-h3 lg:text-h2 font-secondary text-primary100 lg:mb-8 mb-6">
                <h2>{!! $title !!}</h2>
            </div>
            @endif
            <div class="flex items-center h-fit gap-8 testimonialsSwiper__nav lg:mb-8 mb-2">
                <div class="testimonialsSwiper__nav--prev">
                    @include('partials.swiper-button')
                </div>
                <div class="testimonialsSwiper__nav--next">
                    @include('partials.swiper-button', ['class' => 'rotate-180'])
                </div>
            </div>
        </div>
        @if ($testimonials)
        <div class="swiper swiperTestimonials">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                @php
                    $image = $testimonial['image'] ?? null;
                    $name = $testimonial['name'] ?? null;
                    $text = $testimonial['opinion'] ?? null;
                    $after = $testimonial['underopinion'] ?? null;
                @endphp
                <div class="swiper-slide">
                    <div class="grid grid-cols-12 gap-6 ">
                    <div class="col-span-full lg:col-span-9 bg-white rounded-2xl p-8 h-fit">
                        <div class="flex flex-col lg:gap-6 gap-2">
                            @if ($name)
                            <div class="text-h4 font-secondary text-black80">
                                <h3>{!! $name !!}</h3>
                            </div>
                            @endif
                            @if ($text)
                            <div class="text-B20 font-light text-black60">
                                {!! $text !!}
                            </div>
                            @endif
                            @if ($after)
                            <div class="text-B20 italic lg:text-BQuote text-black80">
                                <p>{!! $after !!}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    @if ($image)
                    <div class="max-lg:hidden col-span-3 relative -top-[170px] -left-[calc((90/264)*100%)]  z-10">
                        {!! wp_get_attachment_image($image, 'full', false, ['class' => 'shadow-cien-1 aspect-[1/1] w-[264px] object-contain object-center rounded-2xl']) !!}
                    </div>
                    @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
       </div>
 </section>