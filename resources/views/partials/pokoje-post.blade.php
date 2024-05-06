@php

$gallery = get_field('gallery');
$price = get_field('price');
$size = get_field('size');
$features = get_field('features');
$type = get_field('type');
$availability = get_field('availability');

@endphp
<div class="grid grid-cols-12 gap-6 my-10">
    
    @if ($gallery)
    <div class="col-span-12 lg:col-span-4 galleryPokoje flex justify-center">
        <div class="max-lg:max-w-[360px] max-xs:max-w-full max-w-full">
            <div class="swiper gallery-slider" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @php $galleryId = uniqid('gallery_'); @endphp
                    @if (has_post_thumbnail())
                    <div class="swiper-slide overflow-hidden rounded-2xl relative">
                        <a class="glightbox" href="{!! wp_get_attachment_image_url($image, 'full') !!}" data-gallery="{{ $galleryId }}">
                            {!! get_the_post_thumbnail(null, 'full', ['class' => 'hover:scale-110 transition-all duration-500 ease-in-out object-cover object-center aspect-[1/1] max-xs:h-[300px] xs:max-w-[360px] rounded-2xl']) !!}
                        </a>
                    </div>
                    @endif
                    @foreach ($gallery as $image)
                    <div class="swiper-slide overflow-hidden rounded-2xl relative">
                        <a class="glightbox" href="{!! wp_get_attachment_image_url($image, 'full') !!}" data-gallery="{{ $galleryId }}">
                            {!! wp_get_attachment_image($image, 'full', false, ['class' => 'hover:scale-110 transition-all duration-500 ease-in-out object-cover object-center aspect-[1/1] max-xs:h-[300px] xs:max-w-[360px] rounded-2xl']) !!}
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper gallery-thumbs mt-4 xs:mt-6" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @if (has_post_thumbnail())
                    <div class="swiper-slide overflow-hidden rounded-lg relative">
                        {!! get_the_post_thumbnail(null, 'full', ['class' => 'hover:scale-110 transition-all duration-500 ease-in-out object-cover object-center aspect-[1/1] max-w-[72px] rounded-lg']) !!}
                    </div>
                    @endif
                    @foreach ($gallery as $image)
                    <div class="swiper-slide overflow-hidden rounded-lg relative">
                        {!! wp_get_attachment_image($image, 'medium', false, ['class' => 'hover:scale-110 transition-all duration-500 ease-in-out object-cover object-center aspect-[1/1] max-w-[72px] rounded-lg']) !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="col-span-full lg:col-span-8">
        <div class="box shadow-cien-1 p-6 rounded-3xl">
            <div class="flex flex-col gap-4">
                <div class="flex items-center justify-center  lg:justify-between flex-wrap">
                    <div class="text-h3 font-primary" data-aos="fade-up">
                        <h2>@title</h2>
                    </div>
                    @if ($price)
                    <div class="price text-B12" data-aos="fade-up">
                        <span class="text-B20 font-bold" >
                            {!! $price !!}
                        </span>
                        <span> zł / doba</span>
                    </div>
                    @endif

                </div>
                @if (has_excerpt())
                <div class="excerpt" data-aos="fade-up">
                    @excerpt
                </div>
                @endif
                <div class="additional flex flex-col gap-2" data-aos="fade-up">
                    @if ($size)
                    <div class="size">
                        <span class="font-bold">Liczba osób:</span> {!! $size !!}
                    </div>
                    @endif
                    @if ($features)
                    <div class="features" data-aos="fade-up">
                        <span class="font-bold block mb-2">Udogodnienia:</span>
                        <div class="flex flex-wrap gap-4">
                            @foreach ($features as $feature)
                            <span class="flex items-center gap-2">@svg('images.icons.check'){!! $feature['feature'] !!}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                <div class="inline-flex mt-6 lg:mt-8 w-full justify-center lg:justify-end" data-aos="fade-up">
                    <a href="#form" class="btn btn--primary">Chcę zarezerwować @svg('images.icons.hand_sec')</a>
                </div>
            </div>
        </div>
    </div>
</div>