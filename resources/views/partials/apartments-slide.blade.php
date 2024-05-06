@php
$gallery = get_field('gallery');
$price = get_field('price');
$size = get_field('size');
$features = get_field('features');

$type = get_field('type');
$availability = get_field('availability');
@endphp

<div class="swiper-slide col-span-1">
    <div class="flex flex-col gap-4 items-center justify-center px-4 pt-4 pb-6 rounded-3xl transition-all duration-500 ease-in-out hover:shadow-cien-1">
        <div class="swiper swiperPhotoApartment max-w-full w-full" >
            <div class="swiper-wrapper">
                @if (has_post_thumbnail())
                    <div class="swiper-slide flex items-center justify-center" >
                        {!! get_the_post_thumbnail(null, 'full', ['class' => 'h-[328px] object-cover object-center rounded-2xl']) !!}
                    </div>
                @endif
                @foreach ($gallery as $image)
                    <div class="swiper-slide flex items-center justify-center">
                        {!! wp_get_attachment_image($image, 'full', false, ['class' => 'h-[328px] object-cover object-center rounded-2xl']) !!}
                    </div>
                @endforeach
               
            </div>
            <div class="swiper-pagination">

            </div>
        </div>
        <div class="text text-texter flex flex-col gap-2 w-full">
            <div class="title">

                <div class="text-h5 lg:text-h4 font-primary" data-aos="fade-up">
                    <h3>@title</h3>
                </div>
                @if ($type)
                <div class="textB12" data-aos="fade-up">
                    <p>{!! $type !!}</p>
                </div>
                @endif
            </div>
            @if ($size)
            <div class="text-B16 flex gap-2 items-center flex-wrap" data-aos="fade-up">
                <div class="font-bold">
                    <p>Ilość osób:</p>
                </div>
                <p>{!! $size !!}</p>
            </div>
            @endif
            @if ($availability)
            <div class="text-B16 flex gap-2 items-center flex-wrap" data-aos="fade-up">
                <div class="font-bold">
                    <p>Dostępność:</p>
                </div>
                <p>{!! $availability !!}</p>
            </div>
            @endif
        </div>

    </div>     
</div>