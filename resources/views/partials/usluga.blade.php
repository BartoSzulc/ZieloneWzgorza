<div class="col-span-1 flex items-center justify-center">
    <div class="w-fit flex flex-col gap-4 items-center justify-center text-center p-4 pb-6 rounded-3xl transition-all duration-500 ease-in-out hover:shadow-cien-1">
        {!! wp_get_attachment_image($image, 'full', false, ["class" => "h-[264px] w-[264px] object-cover object-center rounded-3xl", 'loading' => 'lazy']) !!}
        <div class="text text-primary-500">
            @if ($title)
            <div class="text-h4 font-primary" data-aos="fade-up">
                <h3>{!! $title !!}</h3>
            </div>
            @endif
            @if ($subtitle)
            <div class="additional text-B12" data-aos="fade-up">
                <p>{!! $subtitle !!}</p>
            </div>
            @endif
        </div>
    </div>
</div>